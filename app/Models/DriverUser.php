<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DriverUser extends Model
{
    use HasFactory;

    protected $table = 'driver_user';

    protected $fillable = [
        'primeiro_nome',
        'ultimo_nome',
        'cpf_rne',
        'email',
        'telefone_celular',
        'data_nascimento',
        'sexo'
    ];
}
