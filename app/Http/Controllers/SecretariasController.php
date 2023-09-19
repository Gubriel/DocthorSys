<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecretariasController extends Controller
{
    public function index()
    {
        $secretarias = array(
            array('nome' => 'Silvana da Silva', 'registro' => '25', 'telefone' => '46991234556', 'email' => 'SilSil@protonmail.com', 'cpf' => '1123456789', 'rg' => '1212315125', 'endereco' => 'Evil-corp'),
        );

        return view('app.pages.secretaria.listar', compact('secretarias'));
    }
}
