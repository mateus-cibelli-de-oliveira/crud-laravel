<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produtos extends Model
{
    use HasFactory;

    public static function getProdutos()
    {
        return DB::table('produtos')
            ->select('produtos.id','produtos.produto','setores.setor')
            ->join('setores', 'setores.id', '=', 'produtos.id_setor')
            ->get();
    }
}
