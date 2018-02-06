<?php

namespace dservices\Http\Controllers\usuarios;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use Crypt;
use dservices\Model\configuracion;
use dservices\Model\solicitudes;
use dservices\Model\tarifas;
use dservices\Model\servicioscontratistas;
use dservices\Model\pagos;
use dservices\Model\membresia;
use dservices\Mail\confirmacionPagoMail;
use Auth;
use dservices\User;
use Mail;


class pagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crypt::decrypt($id);

        $solicitudes=solicitudes::find($data);
        $membresia=membresia::where('users_id',$solicitudes->users_id);
        $Tbasica=tarifas::find(1);
        $Tmembresia=tarifas::find(2);
        $Usuario=User::find($solicitudes->users_id);


        $configuracion=configuracion::first();
        $servicio=servicioscontratistas::where('id',$solicitudes->servicioscontratistas_id)->first();


        if($membresia){
            $solicitudes->valor=$servicio->tarifaparticular-($servicio->tarifaparticular*$Tmembresia->porcentaje/100);  
            $solicitudes->tarifas_id=2;
        }
        else{
            $solicitudes->valor=$servicio->tarifaparticular-($servicio->tarifaparticular*$Tbasica->porcentaje/100);
            $solicitudes->tarifas_id=1;            
        }



        return view('usuarios.pagoView')
        ->with('configuracion',$configuracion)
        ->with('Tbasica',$Tbasica)
        ->with('Tmembresia',$Tmembresia)
        ->with('servicio',$servicio)
        ->with('Usuario',$Usuario)
        ->with('solicitudes',$solicitudes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function respuesta(Request $request){

        //return $request;
        $ApiKey = '4Vj8eK4rloUd272L48hsrarnUA';
        $merchant_id = $request->merchantId;
        $referenceCode = $request->referenceCode;
        $TX_VALUE = $request->TX_VALUE;
        $New_value = number_format($TX_VALUE, 1, '.', '');
        $currency = $request->currency;
        $transactionState = $request->transactionState;
        $firma_cadena = $ApiKey.'~'.$merchant_id.'~'.$referenceCode.'~'.$New_value.'~'.$currency.'~'.$transactionState;
        $firmacreada = md5($firma_cadena);
        $firma = $request->signature;

        
        return view('usuarios.confirmarPagoView')
        ->with('respuesta',$request)
        ->with('firma',$firma)
        ->with('firmacreada',$firmacreada);
    }
    public function confirmacion(Request $request){
        $ApiKey = '4Vj8eK4rloUd272L48hsrarnUA';
        $merchant_id = $request->merchantId;
        $referenceCode = $request->referenceCode;
        $TX_VALUE = $request->TX_VALUE;
        $New_value = number_format($TX_VALUE, 1, '.', '');
        $currency = $request->currency;
        $state_pol=$request->state_pol;
        $firma_cadena = $ApiKey.'~'.$merchant_id.'~'.$referenceCode.'~'.$New_value.'~'.$currency.'~'.$state_pol;
        $firmacreada = md5($firma_cadena);
        $firma = $request->signature;

            //Crear el registro de pago
            pagos::create($request->all());
            //enviar correo
            
            //Actualizar estado de la solicitud
            $solicitud=$request{'reference_sale'};
            $solicitud=str_replace('DSVIP', '', $solicitud);
            
            if ($request{'state_pol'}==4){
                $pago=pago::where('transaction_id',$request->transaction_id)
                ->first();
                $solicitudes=solicitudes::find($solicitud);
                $solicitudes->facturada=1;
                $solicitudes->estadosolicitudes_id=7;
                $solicitudes->save();
                Mail::to($Auth::user()->mail())->send(new confirmacionPagoMail(Auth::user(),$pago));
            }
    }

    public function membresiaconfirmacion(Request $request){
        $ApiKey = '4Vj8eK4rloUd272L48hsrarnUA';
        $merchant_id = $request->merchantId;
        $referenceCode = $request->referenceCode;
        $TX_VALUE = $request->TX_VALUE;
        $New_value = number_format($TX_VALUE, 1, '.', '');
        $currency = $request->currency;
        $state_pol=$request->state_pol;
        $firma_cadena = $ApiKey.'~'.$merchant_id.'~'.$referenceCode.'~'.$New_value.'~'.$currency.'~'.$state_pol;
        $firmacreada = md5($firma_cadena);
        $firma = $request->signature;

            //Crear el registro de pago
            pagos::create($request->all());
            //enviar correo
            
            //Actualizar estado de la solicitud
            $membresia=$request{'reference_sale'};
            $membresia=str_replace('DSVIPM', '', $membresia);
            
            if ($request{'state_pol'}==4){
                $pago=pago::where('transaction_id',$request->transaction_id)
                ->first();
                $membresiaN=membresia::find($solicitud);
                $membresiaN->pagado=1;                
                $membresiaN->save();
                Mail::to($Auth::user()->mail())->send(new confirmacionPagoMail(Auth::user(),$pago));
       }
    }
}
