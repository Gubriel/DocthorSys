<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecretariasController extends Controller
{
    public function index()
    {
        $secretarias = array(
            array('nome' => ' ','especialidade' => ' ','telefone' => ' '),
        );

        return view('app.pages.secretaria.listar', compact('secretarias'));
    }
}
