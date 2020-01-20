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
use App\Consult;
use App\Doctor;
use Gate;
use DB;
use PDF;

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
        if(!Gate::allows('isAdmin') && !Gate::allows('isDoctor')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $consults = $this->consultRepository->all();
        $patient = Patient::all();
        $doctors = Doctor::all();
        return view('consults.index', compact('patient', 'doctors'))
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
      if(!Gate::allows('isAdmin')){
        abort(404, "Sorry, you're not authorize to do this");
      }
         $consult = Consult::all();
         $doctors = Doctor::all();
        return view('consults.create', compact('doctors'));
    }

    /**
     * Store a newly created Consult in storage.
     *
     * @param CreateConsultRequest $request
     *
     *
      *@return Response
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
        if(!Gate::allows('isAdmin') && !Gate::allows('isDoctor')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $consult = $this->consultRepository->find($id);
        $doctors = Doctor::all();
        if (empty($consult)) {
            Flash::error('Consult not found');

            return redirect(route('consults.index'));
        }

        return view('consults.show', compact('doctors'))->with('consult', $consult);
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
        if(!Gate::allows('isAdmin') && !Gate::allows('isDoctor')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $consult = $this->consultRepository->find($id);
        $patient = Patient::all();
        $doctors = Doctor::all();
        if (empty($consult)) {
            Flash::error('Consult not found');

            return redirect(route('consults.index'));
        }

        return view('consults.edit', compact('patient','doctors'))->with('consult', $consult);
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

    public function search(Request $request)
    {
      $request->validate([
        'query'=>'required|min:3',
      ]);

      $query = $request->input('query');

      $consults = DB::table('consults')->where('patients_name','like',"%$query%")
                        ->orWhere('doctor_name','like',"%$query%")
                        ->paginate(15);

      return view('consults.search-results')->with('consults', $consults);
    }

    public function pdf($id){
      if(!Gate::allows('isAdmin')){
        abort(404, "Sorry, you're not authorize to do this");
      }
      $consults = Consult::find($id);
      $pdf = PDF::loadView('consults.pdf', compact('consults'));
      return $pdf->download('consults.pdf');
    }

    public function pdf_list(){
      if(!Gate::allows('isAdmin')){
        abort(404, "Sorry, you're not authorize to do this");
      }
      $consults = Consult::all();
      $pdf = PDF::loadView('consults.pdf1', compact('consults', 'consults'));
      return $pdf->download('consult_list.pdf');
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
        if(!Gate::allows('isAdmin')){
          abort(404, "Sorry, you're not authorize to do this");
        }
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
