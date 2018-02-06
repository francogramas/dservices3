<?php

namespace dservices\Model;

use Illuminate\Database\Eloquent\Model;

class configuracion extends Model
{
    protected $table = 'configuracion';
	protected $primarykey='id';	
    protected $fillable = ['id','valor_tarifa','iva','valor_porcentaje_pago','valor_fijo_pago','merchantId','signature','accountId','shippingCountry'];
}
