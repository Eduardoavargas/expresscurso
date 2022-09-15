<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContatoRequest;
use App\Http\Requests\UpdateContatoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ContatoRepository;
use Illuminate\Http\Request;
use Flash;

class ContatoController extends AppBaseController
{
    /** @var  ContatoRepository $contatoRepository*/
    private $contatoRepository;

    public function __construct(ContatoRepository $contatoRepo)
    {
        $this->contatoRepository = $contatoRepo;
    }

    /**
     * Display a listing of the Contato.
     */
    public function index(Request $request)
    {
        $contatos = $this->contatoRepository->paginate(10);

        return view('contatos.index')
            ->with('contatos', $contatos);
    }

    /**
     * Show the form for creating a new Contato.
     */
    public function create()
    {
        return view('contatos.create');
    }

    /**
     * Store a newly created Contato in storage.
     */
    public function store(CreateContatoRequest $request)
    {
        $input = $request->all();

        $contato = $this->contatoRepository->create($input);

        Flash::success('Contato saved successfully.');

        return redirect(route('contatos.index'));
    }

    /**
     * Display the specified Contato.
     */
    public function show($id)
    {
        $contato = $this->contatoRepository->find($id);

        if (empty($contato)) {
            Flash::error('Contato not found');

            return redirect(route('contatos.index'));
        }

        return view('contatos.show')->with('contato', $contato);
    }

    /**
     * Show the form for editing the specified Contato.
     */
    public function edit($id)
    {
        $contato = $this->contatoRepository->find($id);

        if (empty($contato)) {
            Flash::error('Contato not found');

            return redirect(route('contatos.index'));
        }

        return view('contatos.edit')->with('contato', $contato);
    }

    /**
     * Update the specified Contato in storage.
     */
    public function update($id, UpdateContatoRequest $request)
    {
        $contato = $this->contatoRepository->find($id);

        if (empty($contato)) {
            Flash::error('Contato not found');

            return redirect(route('contatos.index'));
        }

        $contato = $this->contatoRepository->update($request->all(), $id);

        Flash::success('Contato updated successfully.');

        return redirect(route('contatos.index'));
    }

    /**
     * Remove the specified Contato from storage.
     *
     * @throws  \Exception
     */
    public function destroy($id)
    {
        $contato = $this->contatoRepository->find($id);

        if (empty($contato)) {
            Flash::error('Contato not found');

            return redirect(route('contatos.index'));
        }

        $this->contatoRepository->delete($id);

        Flash::success('Contato deleted successfully.');

        return redirect(route('contatos.index'));
    }
}
