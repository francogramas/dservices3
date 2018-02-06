<?php

namespace dservices;

use Illuminate\Database\Eloquent\Model;

class tipodocumento extends Model
{
    protected $table = 'tipodocumento';
    protected $primarykey='id'; 
    protected $fillable = ['id', 'tipo'];
}
