<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateJobeurRequest;
use App\Http\Requests\UpdateJobeurRequest;
use App\Repositories\JobeurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JobeurController extends AppBaseController
{
    /** @var  JobeurRepository */
    private $JobeurRepository;

    public function __construct(JobeurRepository $jobeurRepo)
    {
        $this->JobeurRepository = $jobeurRepo;
    }

    /**
     * Display a listing of the jobeur.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jobeurs = $this->JobeurRepository->all();

        //dd($jobeurs);

        return view('admin.jobeurs.index')
            ->with('jobeurs', $jobeurs);
    }

    /**
     * Show the form for creating a new jobeur.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.jobeurs.create');
    }

    /**
     * Store a newly created jobeur in storage.
     *
     * @param CreateJobeurRequest $request
     *
     * @return Response
     */
    public function store(CreateJobeurRequest $request)
    {
        $input = $request->all();

        $jobeur = $this->JobeurRepository->create($input);

        Flash::success('jobeur saved successfully.');

        return redirect(route('admin.jobeurs.index'));
    }

    /**
     * Display the specified jobeur.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobeur = $this->JobeurRepository->find($id);

        if (empty($jobeur)) {
            Flash::error('jobeur not found');

            return redirect(route('admin.jobeurs.index'));
        }

        return view('admin.jobeurs.show')->with('jobeur', $jobeur);
    }

    /**
     * Show the form for editing the specified jobeur.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobeur = $this->JobeurRepository->find($id);

        if (empty($jobeur)) {
            Flash::error('jobeur not found');

            return redirect(route('admin.jobeurs.index'));
        }

        return view('admin.jobeurs.edit')->with('jobeur', $jobeur);
    }

    /**
     * Update the specified jobeur in storage.
     *
     * @param int $id
     * @param UpdateJobeurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobeurRequest $request)
    {
        $jobeur = $this->JobeurRepository->find($id);

        if (empty($jobeur)) {
            Flash::error('jobeur not found');

            return redirect(route('admin.jobeurs.index'));
        }

        $jobeur = $this->JobeurRepository->update($request->all(), $id);

        Flash::success('jobeur updated successfully.');

        return redirect(route('admin.jobeurs.index'));
    }

    /**
     * Remove the specified jobeur from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobeur = $this->JobeurRepository->find($id);

        if (empty($jobeur)) {
            Flash::error('jobeur not found');

            return redirect(route('admin.jobeurs.index'));
        }

        $this->JobeurRepository->delete($id);

        Flash::success('jobeur deleted successfully.');

        return redirect(route('admin.jobeurs.index'));
    }
}
