<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Repositories\DoctorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Specialist;
use DB;

class DoctorController extends AppBaseController
{
    /** @var  DoctorRepository */
    private $doctorRepository;

    public function __construct(DoctorRepository $doctorRepo)
    {
        $this->doctorRepository = $doctorRepo;
    }

    /**
     * Display a listing of the Doctor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $doctors = $this->doctorRepository->paginate(15);
        $specialization = Specialist::all();
        return view('doctors.index', compact('specialization'))
            ->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new Doctor.
     *
     * @return Response
     */
    public function create()
    {
        $specialization = Specialist::all();
        return view('doctors.create', compact('specialization'));
    }

    /**
     * Store a newly created Doctor in storage.
     *
     * @param CreateDoctorRequest $request
     *
     * @return Response
     */
    public function store(CreateDoctorRequest $request)
    {
        $input = $request->all();
        $specialization = Specialist::all();
        $doctor = $this->doctorRepository->create($input);

        Flash::success('Doctor saved successfully.');

        return redirect(route('doctors.index'));
    }

    /**
     * Display the specified Doctor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doctor = $this->doctorRepository->find($id);
        $specialization = Specialist::all();
        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.show', compact('specialization'))->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified Doctor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doctor = $this->doctorRepository->find($id);
        $specialization = Specialist::all();
        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.edit', compact('specialization'))->with('doctor', $doctor);
    }

    /**
     * Update the specified Doctor in storage.
     *
     * @param int $id
     * @param UpdateDoctorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoctorRequest $request)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        $doctor = $this->doctorRepository->update($request->all(), $id);

        Flash::success('Doctor updated successfully.');

        return redirect(route('doctors.index'));
    }

    public function search(Request $request)
    {
      $request->validate([
        'query'=>'required|min:3',
      ]);

      $query = $request->input('query');

      $doctors = DB::table('doctors')->where('dr_name','like',"%$query%")
                        ->orWhere('dr_specialist','like',"%$query%")
                        ->orWhere('dr_status','like',"%$query%")
                        ->paginate(15);

      return view('doctors.search-results')->with('doctors', $doctors);
    }

    /**
     * Remove the specified Doctor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        $this->doctorRepository->delete($id);

        Flash::success('Doctor deleted successfully.');

        return redirect(route('doctors.index'));
    }
}
