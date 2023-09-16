<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

        $usuarios = array(
            array('nome' => 'teste','especialidade' => 'teste','telefone' => 'teste'),
        );
        return view('app.pages.users.listar',compact('usuarios'));
    }
}
