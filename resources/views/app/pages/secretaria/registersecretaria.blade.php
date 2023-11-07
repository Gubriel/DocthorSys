use App\Models\Secretaria;
use Illuminate\Http\Request;

...

public function store(Request $request)
{
    $validatedData = $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:secretarias',
        'senha' => 'required|string|min:8',
    ]);

    $secretaria = Secretaria::create([
        'nome' => $validatedData['nome'],
        'email' => $validatedData['email'],
        
       
'senha' => bcrypt($validatedData['senha']),
    ]);

    // Redirecionar para a página de lista de secretárias ou para onde desejar.
    return redirect()->route('secretaria.index');
}

    
   