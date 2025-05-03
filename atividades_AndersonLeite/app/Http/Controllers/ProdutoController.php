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
      $newProduto['importado'] = $request->has('importado') ? 1 : 0;

        if (Produto::create($newProduto)) {
       return redirect('/produtos');
        }else{
            dd("Erro ao cadastrar produto");
        }
    }

    public function edit($id){
       $data = ['produto' => Produto::find($id)];
       return view('produto_edit', $data);
    }

    public function update(Request $request, $id){
       $updateProduto = $request->all();
         $updateProduto['importado'] = $request->has('importado') ? 1 : 0;

          $produto = Produto::find($id);
          if (!$produto) {
                return redirect()->route('produtos')->with('error', 'Produto não encontrado');
          }

          $produto->update($updateProduto);
          return redirect()->route('produtos')->with('success', 'Produto atualizado com sucesso');
    }
    
    public function delete($id){
      return view('produtos.remove',[
       'produto' => Produto::find($id)
      ]);
    }

    public function remove(Request $request, $id){
       if($request->confirmar==="Deletar")
        if(!Produto::destroy($id))
            dd("Erro ao deletar produto $id");
        else{
            return redirect('/produtos');
        }
    }

}



