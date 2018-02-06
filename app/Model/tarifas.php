<?php

namespace dservices\Model;

use Illuminate\Database\Eloquent\Model;

class tarifas extends Model
{
    protected $table = 'tarifas';
	protected $primarykey='id';	
    protected $fillable = ['id', 'nombre','porcentaje'];
    public $timestamps = false;
}
