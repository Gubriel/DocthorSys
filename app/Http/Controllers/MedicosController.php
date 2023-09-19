<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicosController extends Controller
{

    public function index()
    {
        $medicos = array(
            array('nome' => 'Elliot Anderson da Silva', 'registro' => '1','especialidade' => 'Psiquiatra', 'telefone' => '46999432305', 'email' => 'EAnder69@protonmail.com', 'cpf' => '12456125421', 'rg' => '124352626', 'endereco' => 'Evil-corp'),
        );

        return view('app.pages.medicos.listar', compact('medicos'));
    }



}
