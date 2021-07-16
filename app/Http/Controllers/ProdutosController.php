<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\Setores;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProdutosController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getProduto()
    {
        return Produtos::getProdutos();
    }

    // {
    //     "produtos": "Pão", "Leite" ou "Ovo", etc...
    //     "id_setor": id de um setor existente.
    // }
    public function postProduto(Request $request)
    {

        if ($request['produto'] && $request['id_setor']) {
            $produtos = new Produtos();
            $produtos->produto = $request['produto'];
            $produtos->id_setor = $request['id_setor'];
            $produtos->save();
            return $produtos;
        } else {
            return "O campo produto e id_setor precisam ser preenchidos";
        }
    }
    // {
    //     "id": id do produto para fazer update.
    //     "produto": "Pão", "Leite" ou "Ovo", etc...
    //     "id_setor": id de um setor existente.
    // }

    public function putProduto(Request $request)
    {

        if ($request['produto'] && $request['id_setor'] && $request['id']) {

            $produtos = Produtos::find($request['id']);
            $produtos->produto = $request['produto'];
            $produtos->id_setor = $request['id_setor'];
            $produtos->save();
            return $produtos;
        } else {
            return "É obrigatório os campos: produto, id_setor e id";
        }
    }
    // {
    //     "id": id do produto a ser deletado.
    // }
    public function deleteProduto(Request $request)
    {
        if ($request['id']) {
            $produtos = Produtos::find($request['id']);
            $produtos->delete();
            return $produtos;
        } else {
            return "É o obrigatório o campo id";
        }
    }


    public function getSetor()
    {
        return Setores::all();
    }

    // {
    //     "setores": "Padaria","Frios","Açougue", etc...
    // }
    public function postSetor(Request $request)
    {
        if ($request['setores']) {
            $setores = new Setores();
            $setores->setor = $request['setores'];
            $setores->save();
            return $setores;
        } else {
            return "O campo setores é obrigatorio";
        }
    }

    // {
    //     "setores": "Padaria","Frios","Açougue", etc...
    //     "id": id do setor.
    // }
    public function putSetor(Request $request)
    {

        if ($request['setores'] && $request['id']) {

            $setores = Setores::find($request['id']);
            $setores->setor = $request['setores'];
            $setores->save();
            return $setores;
        } else {
            return "É obrigatório os campos: setores e id";
        }
    }


    // {
    //     "id": id do setor que será deletado.
    // }
    public function deleteSetor(Request $request)
    {

        if ($request['id']) {
            $setores = Setores::find($request['id']);
            $setores->delete();
            return $setores;
        } else {
            return "É o obrigatório o campo id";
        }
    }
}
