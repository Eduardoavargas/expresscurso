<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CursoRepository;
use Illuminate\Http\Request;
use Flash;

class CursoController extends AppBaseController
{
    /** @var  CursoRepository $cursoRepository*/
    private $cursoRepository;

    public function __construct(CursoRepository $cursoRepo)
    {
        $this->cursoRepository = $cursoRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Curso.
     */
    public function index(Request $request)
    {
        $cursos = $this->cursoRepository->paginate(10);

        return view('cursos.index')
            ->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new Curso.
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created Curso in storage.
     */
    public function store(CreateCursoRequest $request)
    {
        $input = $request->all();

        $curso = $this->cursoRepository->create($input);

        Flash::success('Curso saved successfully.');

        return redirect(route('cursos.index'));
    }

    /**
     * Display the specified Curso.
     */
    public function show($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.show')->with('curso', $curso);
    }

    /**
     * Show the form for editing the specified Curso.
     */
    public function edit($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.edit')->with('curso', $curso);
    }

    /**
     * Update the specified Curso in storage.
     */
    public function update($id, UpdateCursoRequest $request)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        $curso = $this->cursoRepository->update($request->all(), $id);

        Flash::success('Curso updated successfully.');

        return redirect(route('cursos.index'));
    }

    /**
     * Remove the specified Curso from storage.
     *
     * @throws  \Exception
     */
    public function destroy($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        $this->cursoRepository->delete($id);

        Flash::success('Curso deleted successfully.');

        return redirect(route('cursos.index'));
    }
}
