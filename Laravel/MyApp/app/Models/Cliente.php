<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//este es nuestro Modelo, busca una tabla de Cliente, lo que busca es clientes
class Cliente extends Model
{
    protected $table = 'clientes';//vinculando a la bd de mysql
    
}