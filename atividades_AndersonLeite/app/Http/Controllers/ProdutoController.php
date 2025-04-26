<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    private $produto;
    public function index(){
       $this->produto = new Produto();
       //return response()->json($this->produto->all());
       return view('produtos', ['produtos' => $this->produto->all()]);
    }

    public function show($id){
        $produto = Produto::find($id);

        if (!$produto) {
            return view('produto', ['produto' => null]);
        }

        return view('produto', ['produto' => $produto]);
    }
}


//show(id)->produto->find(id)
