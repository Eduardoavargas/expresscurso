<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVoucherRequest;
use App\Http\Requests\UpdateVoucherRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Divulgador;
use App\Models\Voucher;
use App\Repositories\DivulgadorRepository;
use App\Repositories\VoucherRepository;
use Illuminate\Http\Request;
use Flash;
use RealRashid\SweetAlert\Facades\Alert;

class VoucherController extends AppBaseController
{
    /** @var  VoucherRepository $voucherRepository*/
    private $voucherRepository;

    public function __construct(VoucherRepository $voucherRepo)
    {
        $this->voucherRepository = $voucherRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Voucher.
     */
    public function index(Request $request)
    {
        if(!auth()->user()->isAdmin()){
            Alert::error('Humn', 'Você não tem permissão para acessar esta página.');
            return redirect(route('home'));
        }
            $vouchers = $this->voucherRepository->all();
        $vouchers = $this->voucherRepository->paginate(10);
        // $vouchers = Voucher::with('divulgador')->paginate(10);

        return view('vouchers.index')
            ->with('vouchers', $vouchers);
    }

    /**
     * Show the form for creating a new Voucher.
     */
    public function create()
    {
        if(!auth()->user()->isAdmin()){
            Alert::error('Humn', 'Você não tem permissão para acessar esta página.');
            return redirect(route('home'));
        }
        $divulgadors = Divulgador::all()->where('status', 1)->pluck('nome', 'id');
        return view('vouchers.create', compact('divulgadors'));
    }

    /**
     * Store a newly created Voucher in storage.
     */
    public function store(CreateVoucherRequest $request)
    {
        if(!auth()->user()->isAdmin()){
            Alert::error('Humn', 'Você não tem permissão para acessar esta página.');
            return redirect(route('home'));
        }
        $input = $request->all();

        $voucher = $this->voucherRepository->create($input);

        Flash::success('Voucher saved successfully.');

        return redirect(route('vouchers.index'));
    }


    public function generate(CreateVoucherRequest $request)
    {
        if(!auth()->user()->isAdmin()){
            Alert::error('Humn', 'Você não tem permissão para acessar esta página.');
            return redirect(route('home'));
        }
        $input = $request->all();

        for ($i=0; $i < $input['quantidade']; $i++) { 
            $uuid = uniqid(rand(1,99));
            // pega o uuid e adiciona 3 traços entre eles
            $uuid = substr($uuid, 0, 4) . '-' . substr($uuid, 4, 5) . '-' . substr($uuid, 8, 4);
            $voucher = $this->voucherRepository->create([
                'divulgador_id' => $input['divulgador_id'],
                'status' => 1,
                'utilizado_at' => null,
                'uuid' => $uuid
            ]);
        }


        Flash::success('Voucher saved successfully.');

        return redirect(route('vouchers.index'));
    }


    /**
     * Display the specified Voucher.
     */
    public function show($id)
    {
        if(!auth()->user()->isAdmin()){
            Alert::error('Humn', 'Você não tem permissão para acessar esta página.');
            return redirect(route('home'));
        }
        $voucher = $this->voucherRepository->find($id);

        if (empty($voucher)) {
            Flash::error('Voucher not found');

            return redirect(route('vouchers.index'));
        }

        return view('vouchers.show')->with('voucher', $voucher);
    }

    /**
     * Show the form for editing the specified Voucher.
     */
    public function edit($id)
    {
        if(!auth()->user()->isAdmin()){
            Alert::error('Humn', 'Você não tem permissão para acessar esta página.');
            return redirect(route('home'));
        }
        $voucher = $this->voucherRepository->find($id);

        if (empty($voucher)) {
            Flash::error('Voucher not found');

            return redirect(route('vouchers.index'));
        }

        return view('vouchers.edit')->with('voucher', $voucher);
    }

    /**
     * Update the specified Voucher in storage.
     */
    public function update($id, UpdateVoucherRequest $request)
    {
        if(!auth()->user()->isAdmin()){
            Alert::error('Humn', 'Você não tem permissão para acessar esta página.');
            return redirect(route('home'));
        }
        $voucher = $this->voucherRepository->find($id);

        if (empty($voucher)) {
            Flash::error('Voucher not found');

            return redirect(route('vouchers.index'));
        }

        $voucher = $this->voucherRepository->update($request->all(), $id);

        Flash::success('Voucher updated successfully.');

        return redirect(route('vouchers.index'));
    }

    /**
     * Remove the specified Voucher from storage.
     *
     * @throws  \Exception
     */
    public function destroy($id)
    {
        if(!auth()->user()->isAdmin()){
            Alert::error('Humn', 'Você não tem permissão para acessar esta página.');
            return redirect(route('home'));
        }
        $voucher = $this->voucherRepository->find($id);

        if (empty($voucher)) {
            Flash::error('Voucher not found');

            return redirect(route('vouchers.index'));
        }

        $this->voucherRepository->delete($id);

        Flash::success('Voucher deleted successfully.');

        return redirect(route('vouchers.index'));
    }
}
