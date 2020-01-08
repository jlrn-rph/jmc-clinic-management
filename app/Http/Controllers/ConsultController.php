<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConsultRequest;
use App\Http\Requests\UpdateConsultRequest;
use App\Repositories\ConsultRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Patient;

class ConsultController extends AppBaseController
{
    /** @var  ConsultRepository */
    private $consultRepository;

    public function __construct(ConsultRepository $consultRepo)
    {
        $this->consultRepository = $consultRepo;
    }

    /**
     * Display a listing of the Consult.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $consults = $this->consultRepository->all();
        $patients = Patient::all();
        return view('consults.index', compact('patients'))
            ->with('consults', $consults);
    }

    /**
     * Show the form for creating a new Consult.
     *
     * @return Response
     *
       */
    public function create()
    {
        // $consult = Consult::all();
        return view('consults.create');
    }

    /**
     * Store a newly created Consult in storage.
     *
     * @param CreateConsultRequest $request
     *
     *
      @return Response
     */
    public function store(CreateConsultRequest $request)
    {
        $input = $request->all();
        $consult = $this->consultRepository->create($input);
        Flash::success('Consult saved successfully.');

        return redirect(route('consults.index'));
    }

    /**
     * Display the specified Consult.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consult = $this->consultRepository->find($id);

        if (empty($consult)) {
            Flash::error('Consult not found');

            return redirect(route('consults.index'));
        }

        return view('consults.show')->with('consult', $consult);
    }

    /**
     * Show the form for editing the specified Consult.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $consult = $this->consultRepository->find($id);
        $patients = Patient::all();
        if (empty($consult)) {
            Flash::error('Consult not found');

            return redirect(route('consults.index'));
        }

        return view('consults.edit', compact('patients'))->with('consult', $consult);
    }

    /**
     * Update the specified Consult in storage.
     *
     * @param int $id
     * @param UpdateConsultRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConsultRequest $request)
    {
        $consult = $this->consultRepository->find($id);

        if (empty($consult)) {
            Flash::error('Consult not found');

            return redirect(route('consults.index'));
        }

        $consult = $this->consultRepository->update($request->all(), $id);

        Flash::success('Consult updated successfully.');

        return redirect(route('consults.index'));
    }

    /**
     * Remove the specified Consult from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consult = $this->consultRepository->find($id);

        if (empty($consult)) {
            Flash::error('Consult not found');

            return redirect(route('consults.index'));
        }

        $this->consultRepository->delete($id);

        Flash::success('Consult deleted successfully.');

        return redirect(route('consults.index'));
    }
}
