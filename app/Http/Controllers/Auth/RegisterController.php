<?php

namespace dservices\Http\Controllers\Auth;

use dservices\User;
use dservices\Mail\bienvenidaMail;
use dservices\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;

use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        //Mail::to($data['email'])->queue(new bienvenidaMail($data));

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $Socialuser = Socialite::driver('facebook')->user();            
        } catch (Exception $e) {
            return redirect('/');    
        }

        $user1=User::where('email',$Socialuser->getEmail())->first();        
        $user=User::where('facebook_id',$Socialuser->getId())->first();
        if (!$user) {
            if(!$user1){
                User::create([
                        'facebook_id'=> $Socialuser->getId(),
                        'name'=> $Socialuser->getName(),
                        'email'=> $Socialuser->getEmail(),
                        'role_id'=>'2'
                    ]);
                Mail::to($Socialuser->getEmail())->queue(new bienvenidaMail($Socialuser));
                $user=User::where('facebook_id',$Socialuser->getId())->first();
            }
            else{
                session()->flash('error','Lo sentimos, el correo que intenta registrar ya existe en nuestra base de datos');
            }
            auth()->login($user);
        }
        return redirect('/direccionador');
    }
}