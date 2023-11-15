<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

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

    private function createUser($request)
    {
        return User::create([
            'name' => $request->nome,
            'email' => $request->emailLogin,
            'password' => bcrypt($request->password),
        ]);
    }


    private function createMedico($request, $userId)
    {
        return Medico::create([
            'nome' => $request->nome,
            'crm' => $request->crm,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'user_id' => $userId,
        ]);
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

        // Crie um usuário
        $user = $this->createUser($request);

        // Verifique se o usuário foi criado com sucesso
        if ($user->id) {
            // Crie um médico associado ao usuário
            $medico = $this->createMedico($request, $user->id);

            return response()->json(['success' => true]);
        } else {
            // Caso a criação do usuário falhe
            return response()->json(['success' => false, 'message' => 'Erro ao criar usuário.']);
        }
    }



    public function delete($id) {
        // Localize o médico pelo ID
        $medico = Medico::find($id);

        if (!$medico) {
            // Se o médico não for encontrado, você pode retornar uma resposta ou redirecionar, dependendo da sua lógica de negócios.
            return redirect()->route('medico.index')->with('error', 'Médico não encontrado');
        }

        // Exclua o médico
        $medico->delete();

        // Exclua também o usuário associado ao médico (assumindo que há uma relação entre os modelos Medico e User)
        $user = User::find($medico->user_id);

        if ($user) {
            $user->delete();
        }

        // Você pode retornar uma resposta ou redirecionar, dependendo da sua lógica de negócios.
        return redirect()->route('medico.index')->with('success', 'Médico excluído com sucesso');
    }
}
