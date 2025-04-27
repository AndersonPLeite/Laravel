<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasFactory; //cria seeders
    protected $fillable = [
        'nome',
        'qtd_estoque',
        'preco',            //preenchiveis do modelo
        'importado',
    ];
    protected $table = 'produtos';
    protected $primaryKey = 'id';
}
