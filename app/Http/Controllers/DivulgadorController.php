<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDivulgadorRequest;
use App\Http\Requests\UpdateDivulgadorRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DivulgadorRepository;
use Illuminate\Http\Request;
use Flash;

class DivulgadorController extends AppBaseController
{
    /** @var  DivulgadorRepository $divulgadorRepository*/
    private $divulgadorRepository;

    public function __construct(DivulgadorRepository $divulgadorRepo)
    {
        $this->divulgadorRepository = $divulgadorRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Divulgador.
     */
    public function index(Request $request)
    {
        $divulgadors = $this->divulgadorRepository->paginate(10);

        return view('divulgadors.index')
            ->with('divulgadors', $divulgadors);
    }

    /**
     * Show the form for creating a new Divulgador.
     */
    public function create()
    {
        return view('divulgadors.create');
    }

    /**
     * Store a newly created Divulgador in storage.
     */
    public function store(CreateDivulgadorRequest $request)
    {
        $input = $request->all();

        $divulgador = $this->divulgadorRepository->create($input);

        Flash::success('Divulgador saved successfully.');

        return redirect(route('divulgadors.index'));
    }

    /**
     * Display the specified Divulgador.
     */
    public function show($id)
    {
        $divulgador = $this->divulgadorRepository->find($id);

        if (empty($divulgador)) {
            Flash::error('Divulgador not found');

            return redirect(route('divulgadors.index'));
        }

        return view('divulgadors.show')->with('divulgador', $divulgador);
    }

    /**
     * Show the form for editing the specified Divulgador.
     */
    public function edit($id)
    {
        $divulgador = $this->divulgadorRepository->find($id);

        if (empty($divulgador)) {
            Flash::error('Divulgador not found');

            return redirect(route('divulgadors.index'));
        }

        return view('divulgadors.edit')->with('divulgador', $divulgador);
    }

    /**
     * Update the specified Divulgador in storage.
     */
    public function update($id, UpdateDivulgadorRequest $request)
    {
        $divulgador = $this->divulgadorRepository->find($id);

        if (empty($divulgador)) {
            Flash::error('Divulgador not found');

            return redirect(route('divulgadors.index'));
        }

        $divulgador = $this->divulgadorRepository->update($request->all(), $id);

        Flash::success('Divulgador updated successfully.');

        return redirect(route('divulgadors.index'));
    }

    /**
     * Remove the specified Divulgador from storage.
     *
     * @throws  \Exception
     */
    public function destroy($id)
    {
        $divulgador = $this->divulgadorRepository->find($id);

        if (empty($divulgador)) {
            Flash::error('Divulgador not found');

            return redirect(route('divulgadors.index'));
        }

        $this->divulgadorRepository->delete($id);

        Flash::success('Divulgador deleted successfully.');

        return redirect(route('divulgadors.index'));
    }
}
