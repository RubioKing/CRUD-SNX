<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCrud extends Model
{
    public $timestamps = false;
    protected $table='cliente';
    protected $fillable = [
        'nome', 'id_user', 'razao_social', 'cnpj', 'data_inclusao'
    ];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }

}
