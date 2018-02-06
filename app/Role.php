<?php

namespace dservices;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $table = 'roles';
    protected $primarykey='id'; 
    protected $fillable = ['id', 'name','display_name'];

    /**
     * Role has many .
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('dservices\User', 'role_id', 'id');
    }

}