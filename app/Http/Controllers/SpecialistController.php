<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSpecialistRequest;
use App\Http\Requests\UpdateSpecialistRequest;
use App\Repositories\SpecialistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Gate;
class SpecialistController extends AppBaseController
{
    /** @var  SpecialistRepository */
    private $specialistRepository;

    public function __construct(SpecialistRepository $specialistRepo)
    {
        $this->specialistRepository = $specialistRepo;
    }

    /**
     * Display a listing of the Specialist.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if(!Gate::allows('isAdmin')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $specialists = $this->specialistRepository->all();

        return view('specialists.index')
            ->with('specialists', $specialists);
    }

    /**
     * Show the form for creating a new Specialist.
     *
     * @return Response
     */
    public function create()
    {
        if(!Gate::allows('isAdmin')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        return view('specialists.create');
    }

    /**
     * Store a newly created Specialist in storage.
     *
     * @param CreateSpecialistRequest $request
     *
     * @return Response
     */
    public function store(CreateSpecialistRequest $request)
    {
        $input = $request->all();

        $specialist = $this->specialistRepository->create($input);

        Flash::success('Specialist saved successfully.');

        return redirect(route('specialists.index'));
    }

    /**
     * Display the specified Specialist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if(!Gate::allows('isAdmin')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $specialist = $this->specialistRepository->find($id);

        if (empty($specialist)) {
            Flash::error('Specialist not found');

            return redirect(route('specialists.index'));
        }

        return view('specialists.show')->with('specialist', $specialist);
    }

    /**
     * Show the form for editing the specified Specialist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdmin')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $specialist = $this->specialistRepository->find($id);

        if (empty($specialist)) {
            Flash::error('Specialist not found');

            return redirect(route('specialists.index'));
        }

        return view('specialists.edit')->with('specialist', $specialist);
    }

    /**
     * Update the specified Specialist in storage.
     *
     * @param int $id
     * @param UpdateSpecialistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSpecialistRequest $request)
    {
        $specialist = $this->specialistRepository->find($id);

        if (empty($specialist)) {
            Flash::error('Specialist not found');

            return redirect(route('specialists.index'));
        }

        $specialist = $this->specialistRepository->update($request->all(), $id);

        Flash::success('Specialist updated successfully.');

        return redirect(route('specialists.index'));
    }

    /**
     * Remove the specified Specialist from storage.
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
        $specialist = $this->specialistRepository->find($id);

        if (empty($specialist)) {
            Flash::error('Specialist not found');

            return redirect(route('specialists.index'));
        }

        $this->specialistRepository->delete($id);

        Flash::success('Specialist deleted successfully.');

        return redirect(route('specialists.index'));
    }
}
