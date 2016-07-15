<?php

namespace App\Http\Controllers;

use App\Entities\Pessoa;

class IndexController extends Controller
{
    public function indexAction()
    {
        return view('layout');
    }
    
    public function pessoasAction($letra = 'A')
    {
        // select * from TABELA where CAMPO like '%VALOR%'
        $pessoas = Pessoa::where('apelido', 'like', $letra . '%')->get();
        return response()->json($pessoas);
    }
}
