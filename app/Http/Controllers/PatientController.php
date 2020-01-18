<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Repositories\PatientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Doctor;
use App\Consult;
use Flash;
use Response;
use DB;
use PDF;


class PatientController extends AppBaseController
{
    /** @var  PatientRepository */
    private $patientRepository;

    public function __construct(PatientRepository $patientRepo)
    {
        $this->patientRepository = $patientRepo;
    }

    /**
     * Display a listing of the Patient.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $doctors = Doctor::all();
        $patients = $this->patientRepository->paginate(15);
        return view('patients.index', compact('doctors'))
            ->with('patients', $patients);
    }

    /**
     * Show the form for creating a new Patient.
     *
     * @return Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('patients.create', compact('doctors'));
    }

    /**
     * Store a newly created Patient in storage.
     *
     * @param CreatePatientRequest $request
     *
     * @return Response
     */
    public function store(CreatePatientRequest $request)
    {
        $input = $request->all();
        $doctors = Doctor::all();
        $patient = $this->patientRepository->create($input);

        Flash::success('Patient saved successfully.');


        return redirect(route('patients.index'));
    }

    /**
     * Display the specified Patient.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patients = $this->patientRepository->find($id);
        $consults = Consult::all();
        $doctors = Doctor::all();
        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('patients.index'));
        }

        return view('patients.show', compact('doctors', 'consults'))->with('patients', $patients);
    }

    /**
     * Show the form for editing the specified Patient.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patient = $this->patientRepository->find($id);
        $doctors = Doctor::all();
        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('patients.index'));
        }

        return view('patients.edit', compact('doctors'))->with('patient', $patient);
    }

    /**
     * Update the specified Patient in storage.
     *
     * @param int $id
     * @param UpdatePatientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatientRequest $request)
    {
        $patient = $this->patientRepository->find($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('patients.index'));
        }

        $patient = $this->patientRepository->update($request->all(), $id);

        Flash::success('Patient updated successfully.');

        return redirect(route('patients.index'));
    }

    public function search(Request $request)
    {
      $request->validate([
        'query'=>'required|min:3',
      ]);

      $query = $request->input('query');

      $patients = DB::table('patients')->where('px_name','like',"%$query%")
                        ->orWhere('px_doctor','like',"%$query%")
                        ->orWhere('px_status','like',"%$query%")
                        ->paginate(15);

      return view('patients.search-results')->with('patients', $patients);
    }

    public function pdf($id){
      $patients = Patient::find($id);
      $pdf = PDF::loadView('patients.pdf', compact('patients'));
      return $pdf->download('patients.pdf');
    }

    public function pdf_list(){
      $patients = Patient::all();
      $pdf = PDF::loadView('patients.pdf1', compact('patients'));
      return $pdf->download('patient_list.pdf');
    }

    /**
     * Remove the specified Patient from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patient = $this->patientRepository->find($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('patients.index'));
        }

        $this->patientRepository->delete($id);

        Flash::success('Patient deleted successfully.');

        return redirect(route('patients.index'));
    }
}
