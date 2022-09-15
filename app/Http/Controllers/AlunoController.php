<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Aluno;
use App\Repositories\AlunoRepository;
use Illuminate\Http\Request;
use Flash;

class AlunoController extends AppBaseController
{
    /** @var  AlunoRepository $alunoRepository*/
    private $alunoRepository;

    public function __construct(AlunoRepository $alunoRepo)
    {
        $this->alunoRepository = $alunoRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Aluno.
     */
    public function index(Request $request)
    {
        $alunos = Aluno::where('check',0)->paginate(10);

        return view('alunos.index')
            ->with('alunos', $alunos);
    }

    public function index_ok(Request $request)
    {
        $alunos = Aluno::where('check',1)->paginate(10);

        return view('alunos.index')
            ->with('alunos', $alunos);
    }


    /**
     * Show the form for creating a new Aluno.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created Aluno in storage.
     */
    public function store(CreateAlunoRequest $request)
    {
        $input = $request->all();

        $aluno = $this->alunoRepository->create($input);

        Flash::success('Aluno saved successfully.');

        return redirect(route('alunos.index'));
    }

    /**
     * Display the specified Aluno.
     */
    public function show($id)
    {
        $aluno = $this->alunoRepository->find($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        return view('alunos.show')->with('aluno', $aluno);
    }

    /**
     * Show the form for editing the specified Aluno.
     */
    public function edit($id)
    {
        $aluno = $this->alunoRepository->find($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        return view('alunos.edit')->with('aluno', $aluno);
    }

    public function check($id)
    {
        $aluno = $this->alunoRepository->find($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }
        $aluno = Aluno::where('id',$id)->update([
            'check' => 1,
        ]);

        Flash::success('Aluno atualizado com sucesso.');

        return redirect(route('alunos.index'));
    }

    /**
     * Update the specified Aluno in storage.
     */
    public function update($id, UpdateAlunoRequest $request)
    {
        $aluno = $this->alunoRepository->find($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        $aluno = $this->alunoRepository->update($request->all(), $id);

        Flash::success('Aluno updated successfully.');

        return redirect(route('alunos.index'));
    }

    /**
     * Remove the specified Aluno from storage.
     *
     * @throws  \Exception
     */
    public function destroy($id)
    {
        $aluno = $this->alunoRepository->find($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        $this->alunoRepository->delete($id);

        Flash::success('Aluno deleted successfully.');

        return redirect(route('alunos.index'));
    }
}
