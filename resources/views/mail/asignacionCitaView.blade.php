<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<p>
		Estimad@ {{ $solicitud->name }} hemos agendado su cita para la fecha: {{ $solicitud->fecha }} a las {{ $solicitud->hora }} en el servicio {{ $solicitud->servicio }} con {{ $solicitud->contratista }}
	</p>
	<p>
		Se ha generado una orden de servicio que se encuentra pendiente de pago, para revisarla puede hacerlo aquí.
		<br>
		Este pago puede hacerlo desde donde se encuentre a través de nuestros canales de pago virtuales o desde el punto autorizado más cercano a su ubicación.
		<br>
		Una vez se registre el pago, se hará efectiva la orden de servicio, la cual puede imprimir y presentar en el centro espcializado donde requiera el servicio.
		<br>
		Con esta orden, será atendido en la fecha y hora descrita en la orden.

	</p>
	<p>
		Para realizar el pago de la cita puede hacerlo aquí: <a href={{ url('pagofactura',Crypt::encrypt($solicitud->id))) }}>Generar pago de la factura</a>
	</p>
</body>
</html>