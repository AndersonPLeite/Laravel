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
}


//show(id)->produto->find(id)