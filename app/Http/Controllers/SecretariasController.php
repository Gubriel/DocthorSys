<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecretariasController extends Controller
{
    public function index()
    {
        $secretaria = array(
            array('nome' => 'teste','especialidade' => 'teste','telefone' => 'teste'),
        );

        return view('app.pages.secretaria.listar', compact('secretaria'));
    }
}
