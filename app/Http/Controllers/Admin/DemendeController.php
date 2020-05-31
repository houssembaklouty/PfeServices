<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateDemendeRequest;
use App\Http\Requests\UpdateDemendeRequest;
use App\Repositories\DemendeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DemendeController extends AppBaseController
{
    /** @var  DemendeRepository */
    private $demendeRepository;

    public function __construct(DemendeRepository $demendeRepo)
    {
        $this->demendeRepository = $demendeRepo;
    }

    /**
     * Display a listing of the Demende.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $demendes = $this->demendeRepository->paginate(10);

        return view('admin.demendes.index')
            ->with('demendes', $demendes);
    }

    /**
     * Show the form for creating a new Demende.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.demendes.create');
    }

    /**
     * Store a newly created Demende in storage.
     *
     * @param CreateDemendeRequest $request
     *
     * @return Response
     */
    public function store(CreateDemendeRequest $request)
    {
        $input = $request->all();

        $demende = $this->demendeRepository->create($input);

        Flash::success('Demende saved successfully.');

        return redirect(route('admin.demendes.index'));
    }

    /**
     * Display the specified Demende.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $demende = $this->demendeRepository->find($id);

        if (empty($demende)) {
            Flash::error('Demende not found');

            return redirect(route('admin.demendes.index'));
        }

        return view('admin.demendes.show')->with('demende', $demende);
    }

    /**
     * Show the form for editing the specified Demende.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $demende = $this->demendeRepository->find($id);

        if (empty($demende)) {
            Flash::error('Demende not found');

            return redirect(route('admin.demendes.index'));
        }

        return view('admin.demendes.edit')->with('demende', $demende);
    }

    /**
     * Update the specified Demende in storage.
     *
     * @param int $id
     * @param UpdateDemendeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDemendeRequest $request)
    {
        $demende = $this->demendeRepository->find($id);

        if (empty($demende)) {
            Flash::error('Demende not found');

            return redirect(route('admin.demendes.index'));
        }

        $demende = $this->demendeRepository->update($request->all(), $id);

        Flash::success('Demende updated successfully.');

        return redirect(route('admin.demendes.index'));
    }

    /**
     * Remove the specified Demende from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $demende = $this->demendeRepository->find($id);

        if (empty($demende)) {
            Flash::error('Demende not found');

            return redirect(route('admin.demendes.index'));
        }

        $this->demendeRepository->delete($id);

        Flash::success('Demende deleted successfully.');

        return redirect(route('admin.demendes.index'));
    }
}
