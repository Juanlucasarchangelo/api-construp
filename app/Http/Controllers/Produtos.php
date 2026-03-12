<?php

namespace App\Http\Controllers;

use App\Models\Produtos as ModelsProdutos;
use Illuminate\Http\Request;

class Produtos extends Controller
{
    public function index()
    {
        $getProdutos = ModelsProdutos::all();
        return response()->json($getProdutos);
    }

    public function criar(Request $request)
    {
        $produto = new ModelsProdutos();

        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->marca = $request->input('marca');
        $produto->estoque = $request->input('estoque');
        $produto->save();

        return response()->json(['message' => 'Produto criado com sucesso'], 200);
    }

    public function editar(Request $request, $id)
    {
        $produto = ModelsProdutos::find($id);

        if (!$produto) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        $produto->nome = $request->input('nome', $produto->nome);
        $produto->descricao = $request->input('descricao', $produto->descricao);
        $produto->preco = $request->input('preco', $produto->preco);
        $produto->marca = $request->input('marca', $produto->marca);
        $produto->estoque = $request->input('estoque', $produto->estoque);
        $produto->save();

        return response()->json(['message' => 'Produto atualizado com sucesso']);
    }

    public function excluir($id)
    {
        $produto = ModelsProdutos::find($id);

        if (!$produto) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        $produto->delete();

        return response()->json(['message' => 'Produto excluído com sucesso']);
    }
}
