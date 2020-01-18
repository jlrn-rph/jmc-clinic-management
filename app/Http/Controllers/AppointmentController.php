<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Repositories\AppointmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Gate;
use App\Helpers;

class AppointmentController extends AppBaseController
{
    /** @var  AppointmentRepository */
    private $appointmentRepository;

    public function __construct(AppointmentRepository $appointmentRepo)
    {
        $this->appointmentRepository = $appointmentRepo;
    }

    /**
     * Display a listing of the Appointment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isPatient') && !Gate::allows('isStaff') ){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $appointments = $this->appointmentRepository->all();

        return view('appointments.index')
            ->with('appointments', $appointments);
    }

    /**
     * Show the form for creating a new Appointment.
     *
     * @return Response
     */
    public function create()
    {
      if(!Gate::allows('isAdmin') && !Gate::allows('isPatient') && !Gate::allows('isStaff') ){
        abort(404, "Sorry, you're not authorize to do this");
      }
        return view('appointments.create');
    }

    /**
     * Store a newly created Appointment in storage.
     *
     * @param CreateAppointmentRequest $request
     *
     * @return Response
     */
    public function store(CreateAppointmentRequest $request)
    {
        $input = $request->all();

        $appointment = $this->appointmentRepository->create($input);

        Flash::success('Appointment saved successfully.');

        return redirect(route('appointments.index'));
    }

    /**
     * Display the specified Appointment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isPatient') && !Gate::allows('isStaff') ){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $appointment = $this->appointmentRepository->find($id);

        if (empty($appointment)) {
            Flash::error('Appointment not found');

            return redirect(route('appointments.index'));
        }

        return view('appointments.show')->with('appointment', $appointment);
    }

    /**
     * Show the form for editing the specified Appointment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isStaff') ){
          abort(404, "Sorry, you're not authorize to do this");
        }

        $appointment = $this->appointmentRepository->find($id);

        if (empty($appointment)) {
            Flash::error('Appointment not found');

            return redirect(route('appointments.index'));
        }

        return view('appointments.edit')->with('appointment', $appointment);
    }

    /**
     * Update the specified Appointment in storage.
     *
     * @param int $id
     * @param UpdateAppointmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAppointmentRequest $request)
    {
        $appointment = $this->appointmentRepository->find($id);

        if (empty($appointment)) {
            Flash::error('Appointment not found');

            return redirect(route('appointments.index'));
        }

        $appointment = $this->appointmentRepository->update($request->all(), $id);

        Flash::success('Appointment updated successfully.');

        return redirect(route('appointments.index'));
    }

    /**
     * Remove the specified Appointment from storage.
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
        $appointment = $this->appointmentRepository->find($id);

        if (empty($appointment)) {
            Flash::error('Appointment not found');

            return redirect(route('appointments.index'));
        }

        $this->appointmentRepository->delete($id);

        Flash::success('Appointment deleted successfully.');

        return redirect(route('appointments.index'));
    }

}
