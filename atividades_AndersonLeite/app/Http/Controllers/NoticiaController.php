<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    private $noticia;
    public function index(){
       $this->noticia = new Noticia();
       //return response()->json($this->produto->all());
       return view('noticias', ['noticias' => $this->noticia->all()]);
    }


    public function show($id)
    {
        $noticia = Noticia::find($id);

        if (!$noticia) {
            return view('noticia', ['noticia' => null]);
        }

        return view('noticia', ['noticia' => $noticia]);
    }

}
