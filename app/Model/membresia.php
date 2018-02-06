<?php

namespace dservices\Model;

use Illuminate\Database\Eloquent\Model;

class membresia extends Model
{
    protected $table = 'membresia';
	protected $primarykey='id';	
    protected $fillable = ['id','users_id','validez','valor','pagado'];
}