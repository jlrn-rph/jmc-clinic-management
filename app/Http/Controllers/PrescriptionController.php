<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePrescriptionRequest;
use App\Http\Requests\UpdatePrescriptionRequest;
use App\Repositories\PrescriptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Patient;
use Gate;
class PrescriptionController extends AppBaseController
{
    /** @var  PrescriptionRepository */
    private $prescriptionRepository;

    public function __construct(PrescriptionRepository $prescriptionRepo)
    {
        $this->prescriptionRepository = $prescriptionRepo;
    }

    /**
     * Display a listing of the Prescription.
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

        $prescriptions = $this->prescriptionRepository->all();
        $patients = Patient::all();
        return view('prescriptions.index', compact('patients'))
            ->with('prescriptions', $prescriptions);
    }

    /**
     * Show the form for creating a new Prescription.
     *
     * @return Response
     */
    public function create()
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isDoctor')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        return view('prescriptions.create');
    }

    /**
     * Store a newly created Prescription in storage.
     *
     * @param CreatePrescriptionRequest $request
     *
     * @return Response
     */
    public function store(CreatePrescriptionRequest $request)
    {
        $input = $request->all();
        $patients = Patient::all();
        $prescription = $this->prescriptionRepository->create($input);

        Flash::success('Prescription saved successfully.');

        return redirect(route('prescriptions.index'));
    }

    /**
     * Display the specified Prescription.
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

        $prescription = $this->prescriptionRepository->find($id);
        $patients = Patient::all();
        if (empty($prescription)) {
            Flash::error('Prescription not found');

            return redirect(route('prescriptions.index'));
        }

        return view('prescriptions.show', compact('patients'))->with('prescription', $prescription);
    }

    /**
     * Show the form for editing the specified Prescription.
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

        $prescription = $this->prescriptionRepository->find($id);
        $patients = Patient::all();
        if (empty($prescription)) {
            Flash::error('Prescription not found');

            return redirect(route('prescriptions.index'));
        }

        return view('prescriptions.edit', compact('patients'))->with('prescription', $prescription);
    }

    /**
     * Update the specified Prescription in storage.
     *
     * @param int $id
     * @param UpdatePrescriptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrescriptionRequest $request)
    {
        $prescription = $this->prescriptionRepository->find($id);

        if (empty($prescription)) {
            Flash::error('Prescription not found');

            return redirect(route('prescriptions.index'));
        }

        $prescription = $this->prescriptionRepository->update($request->all(), $id);

        Flash::success('Prescription updated successfully.');

        return redirect(route('prescriptions.index'));
    }

    /**
     * Remove the specified Prescription from storage.
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
        $prescription = $this->prescriptionRepository->find($id);

        if (empty($prescription)) {
            Flash::error('Prescription not found');

            return redirect(route('prescriptions.index'));
        }

        $this->prescriptionRepository->delete($id);

        Flash::success('Prescription deleted successfully.');

        return redirect(route('prescriptions.index'));
    }
}
