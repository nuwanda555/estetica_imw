<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes2'; //la tabla de este modelo ya no es clientes, ahora es clientes2
    public $timestamps = false; //no se usan los campos created_at y updated_at
    //protected $fillable = ['codigo', 'empresa', 'contacto', 'direccion', 'ciudad']; //campos que se pueden rellenar
    protected $guarded = ['id']; //campos que no se pueden rellenar
}
