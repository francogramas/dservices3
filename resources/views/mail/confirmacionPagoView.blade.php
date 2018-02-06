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
		Estimad@ {{ $pago->name }}, hemos recibido su pago, a continuación encontrará un informe detallado del proceso   		
	</p>
	<p>
		Fecha: {{ $pago->fecha }}
	</p>
	<p>
		Concepto: {{ $pago->servicio }}
	</p>
	<p>
		Prestador del servicio: {{ $pago->contratista }}
	</p>
	<p>
		Dirección: {{ $pago->direccion }}
	</p>
	<p>
		Teléfono: {{ $pago->telefono }}
	</p>
	<p>
		Valor: {{ $pago->valor }} 
	</p>
</body>
</html>