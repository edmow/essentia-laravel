<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Nome da tabela no banco de dados
    protected $table = 'clientes';

    // Colunas que podem ser preenchidas em operações como create() ou update()
    protected $fillable = ['nome', 'email', 'telefone', 'foto'];

    // Caso você use timestamps (created_at e updated_at) no banco de dados
    public $timestamps = true;
}
