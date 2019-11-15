<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{

    public function usuarios()
    {
    	return $this->all();
    }

    public function login($email , $clave)
    {
    	return $this->where( 'email' , $email)
    				->where('clave' , $clave)
    				->first();
    }
}
