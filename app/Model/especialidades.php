<?php

namespace dservices\Model;

use Illuminate\Database\Eloquent\Model;

class especialidades extends Model
{
    protected $table = 'especialidades';
	protected $primarykey='id';	
    protected $fillable = ['id', 'nombre'];
}