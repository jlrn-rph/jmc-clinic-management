<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLaboratoryRequest;
use App\Http\Requests\UpdateLaboratoryRequest;
use App\Repositories\LaboratoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Patient;
use App\labTest;
use App\Doctor;
use Gate;

class LaboratoryController extends AppBaseController
{
    /** @var  LaboratoryRepository */
    private $laboratoryRepository;

    public function __construct(LaboratoryRepository $laboratoryRepo)
    {
        $this->laboratoryRepository = $laboratoryRepo;
    }

    /**
     * Display a listing of the Laboratory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isDoctor')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $laboratories = $this->laboratoryRepository->all();
        $doctors = Doctor::all();
        $patients = Patient::all();
        $labtests = LabTest::all();
        return view('laboratories.index', compact('patients', 'labtests','doctors'))
            ->with('laboratories', $laboratories);
    }

    /**
     * Show the form for creating a new Laboratory.
     *
     * @return Response
     */
    public function create()
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isDoctor')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $doctors = Doctor::all();
        $patients = Patient::all();
        $labtests = LabTest::all();
        return view('laboratories.create', compact('patients', 'labtests','doctors'));
    }

    /**
     * Store a newly created Laboratory in storage.
     *
     * @param CreateLaboratoryRequest $request
     *
     * @return Response
     */
    public function store(CreateLaboratoryRequest $request)
    {
        $input = $request->all();
        $patients = Patient::all();
        $labtests = LabTest::all();
        $laboratory = $this->laboratoryRepository->create($input);

        Flash::success('Laboratory saved successfully.');

        return redirect(route('laboratories.index'));
    }

    /**
     * Display the specified Laboratory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isDoctor')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $laboratory = $this->laboratoryRepository->find($id);
        $doctors = Doctor::all();
        $patients = Patient::all();
        $labtests = LabTest::all();
        if (empty($laboratory)) {
            Flash::error('Laboratory not found');

            return redirect(route('laboratories.index'));
        }

        return view('laboratories.show', compact('patients', 'labtests', 'doctors'))->with('laboratory', $laboratory);
    }

    /**
     * Show the form for editing the specified Laboratory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isDoctor')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $laboratory = $this->laboratoryRepository->find($id);
        $doctors = Doctor::all();
        $patients = Patient::all();
        $labtests = LabTest::all();
        if (empty($laboratory)) {
            Flash::error('Laboratory not found');

            return redirect(route('laboratories.index'));
        }

        return view('laboratories.edit', compact('patients','labtests','doctors'))->with('laboratory', $laboratory);
    }

    /**
     * Update the specified Laboratory in storage.
     *
     * @param int $id
     * @param UpdateLaboratoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLaboratoryRequest $request)
    {
        $laboratory = $this->laboratoryRepository->find($id);

        if (empty($laboratory)) {
            Flash::error('Laboratory not found');

            return redirect(route('laboratories.index'));
        }

        $laboratory = $this->laboratoryRepository->update($request->all(), $id);

        Flash::success('Laboratory updated successfully.');

        return redirect(route('laboratories.index'));
    }

    /**
     * Remove the specified Laboratory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('isAdmin')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $laboratory = $this->laboratoryRepository->find($id);

        if (empty($laboratory)) {
            Flash::error('Laboratory not found');

            return redirect(route('laboratories.index'));
        }

        $this->laboratoryRepository->delete($id);

        Flash::success('Laboratory deleted successfully.');

        return redirect(route('laboratories.index'));
    }
}
