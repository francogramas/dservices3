<?php

namespace dservices\Model;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    //
    protected $table = 'pagos';
	protected $primarykey='id';	
    protected $fillable = ['id','state_pol','risk','response_code_pol','reference_sale','reference_pol','payment_method','payment_method_type','value','transaction_date','currency','email_buyer','cus','pse_bank','test','payment_method_id','payment_request_state','response_message_pol','transaction_id'];
}