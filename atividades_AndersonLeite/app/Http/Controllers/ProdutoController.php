<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    private $produto;


    public function index()
    {
    $produtos = Produto::all();
    return view('produtos', ['produtos' => $produtos]);
    }

    public function show($id){
        $produto = Produto::find($id);

        if (!$produto) {
            return view('produto', ['produto' => null]);
        }

        return view('produto', ['produto' => $produto]);
    }

    public function create(){
        return view('produto_create');
    }

    public function store(Request $request){
      $newProduto = $request->all();
      $newProduto['importado'] = ($request->importado('importado') ? 1 : 0);
      if(Produto::create($newProduto)){
        return redirect()->route('produtos');
      }else{
        return redirect()->route('produtos')->with('error', 'Erro ao cadastrar produto');
      }
    }


    public function edit($id){
        $produto = Produto::find($id);
        if (!$produto) {
            return redirect()->route('produtos')->with('error', 'Produto não encontrado');
        }

        return view('produto_edit', ['produto' => Produto::find($id)]);
    }

    public function update(Request $request, $id){
        $produto = Produto::find($id);
        if (!$produto) {
            return redirect()->route('produtos')->with('error', 'Produto não encontrado');
        }

        $produto->update($request->all());
        return redirect()->route('produtos')->with('success', 'Produto atualizado com sucesso');
    }

    public function delete($id){
        $produto = Produto::find($id);
        if (!$produto) {
            return redirect()->route('produtos')->with('error', 'Produto não encontrado');
        }

        $produto->delete();
        return redirect()->route('produtos')->with('success', 'Produto deletado com sucesso');
    }
    public function remove(Request $request, $id){
        $produto = Produto::find($id);
        if (!$produto) {
            return redirect()->route('produtos')->with('error', 'Produto não encontrado');
        }

        $produto->delete();
        return redirect()->route('produtos')->with('success', 'Produto deletado com sucesso');
    }
}



