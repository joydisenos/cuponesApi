<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public function usuarios()
    {
    	return $this->all();
    }
}
