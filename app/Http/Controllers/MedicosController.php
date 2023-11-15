<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\User;
use Illuminate\Http\Request;


class MedicosController extends Controller
{

    public function index()
    {
        $page = 'medicos';
        $medicos = Medico::all();

        return view('app.pages.medicos.index', compact('medicos','page'));
    }

    public function create()
    {
        $page = 'medicosCreate';
        $medicos = array(
            array('nome' => 'Elliot Anderson da Silva', 'registro' => '1','especialidade' => 'Psiquiatra', 'telefone' => '46999432305', 'email' => 'EAnder69@protonmail.com', 'cpf' => '12456125421', 'rg' => '124352626', 'endereco' => 'Evil-corp'),
        );

        return view('app.pages.medicos.create', compact('medicos','page'));
    }

    public function store(Request $request)
    {
        // Valide os dados conforme necessário
        $request->validate([
            'nome' => 'required',
            'crm' => 'required',
            'email' => 'required|email|unique:users,email',
            'telefone' => 'required',
            'endereco' => 'required',
            'emailLogin' => 'required|email|unique:users,email',
        ]);

        // Crie um usuário com base no e-mail do médico
        $user = User::create([
            'name' => $request->nome,
            'email' => $request->emailLogin, // Use o campo emailLogin para criar o usuário
            'password' => bcrypt('senha_padrao'), // Defina uma senha padrão ou gere dinamicamente
        ]);

        // Crie um médico associado ao usuário
        $medico = Medico::create([
            'nome' => $request->nome,
            'crm' => $request->crm,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'user_id' => $user->id, // Associe o ID do usuário ao campo user_id
        ]);


        return response()->json(['success' => true]);
    }


}
