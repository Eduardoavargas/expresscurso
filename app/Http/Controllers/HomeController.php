<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlunoRequest;
use App\Http\Requests\CreateContatoRequest;
use App\Models\Curso;
use App\Models\Voucher;
use App\Repositories\AlunoRepository;
use App\Repositories\ContatoRepository;
use App\Repositories\DivulgadorRepository;
use Flash;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    private $alunoRepository;
    private $contatoRepository;
    private $divulgadorRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AlunoRepository $alunoRepo, ContatoRepository $contatoRepo, DivulgadorRepository $divulgadorRepo)
    {
        $this->alunoRepository = $alunoRepo;
        $this->contatoRepository = $contatoRepo;
        $this->divulgadorRepository = $divulgadorRepo;
        $this->middleware('auth')->except(['welcome', 'save', 'saveContato']);
        $this->middleware('guest')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dados['countAlunosAguardando'] = $this->alunoRepository->getCountAlunosAguardando();
        $dados['countAlunosCadastradoMes'] = $this->alunoRepository->getCountCadastradoMes();
        $dados['countAlunosCadastrado'] = $this->alunoRepository->getCountCadastrado();
        $dados['countContatoCadastrado'] = $this->contatoRepository->getCountContatoCadastrado();
        $dados['rank'] = $this->divulgadorRepository->vouchersDashboard();

        return view('home', compact('dados'));
    }

    public function welcome()
    {

        $cursos = Curso::all()->where('status', '=', '1');
        return view('welcome', compact('cursos'));
    }

    public function saveContato(CreateContatoRequest $request)
    {
        $contato = $request->all();
        $this->contatoRepository->create($contato);
        
        return [
            'success' => true,
            'message' => 'Contato salvo com sucesso!'
        ];
    }

    public function save(CreateAlunoRequest $request)
    {
        $voucher_id = Voucher::where('uuid',$request->codigo)->where('status',1)->where('utilizado_at', null)->first();
        if(!$voucher_id->id){
            Alert::error('Código inválido.','Por favor, verifique o código ou fale com seu consultor.');
            return redirect()->back()->with('error', 'Código inválido');
        }

        $input = $request->all();
        $aluno = $this->alunoRepository->create([
            'nome' => $input['nome'],
            'cpf' => $input['cpf'],
            'email' => $input['email'],
            'data_nascimento' => $input['nascimento'],
            'telefone' => $input['telefone'],
            'voucher_id' => $voucher_id->id,
            'curso_id' => $input['curso_id'],
            'curso_id_b' => $input['curso_id_b']
        ]);
        $aluno = $this->alunoRepository->find($aluno->id);
        Alert::success('Perfeito', 'Código resgatado com sucesso! Em breve você receberá os detalhes por email.');
        return view('success', ['aluno' => $aluno]);
    }
}
