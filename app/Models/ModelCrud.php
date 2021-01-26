<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCrud extends Model
{
    protected $table='cliente';

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }

}
