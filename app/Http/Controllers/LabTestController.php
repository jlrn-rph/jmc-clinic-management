<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLabTestRequest;
use App\Http\Requests\UpdateLabTestRequest;
use App\Repositories\LabTestRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use PDF;
use App\LabTest;

class LabTestController extends AppBaseController
{
    /** @var  LabTestRepository */
    private $labTestRepository;

    public function __construct(LabTestRepository $labTestRepo)
    {
        $this->labTestRepository = $labTestRepo;
    }

    /**
     * Display a listing of the LabTest.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $labTests = $this->labTestRepository->paginate(15);

        return view('lab_tests.index')
            ->with('labTests', $labTests);
    }

    /**
     * Show the form for creating a new LabTest.
     *
     * @return Response
     */
    public function create()
    {
        return view('lab_tests.create');
    }

    /**
     * Store a newly created LabTest in storage.
     *
     * @param CreateLabTestRequest $request
     *
     * @return Response
     */
    public function store(CreateLabTestRequest $request)
    {
        $input = $request->all();

        $labTest = $this->labTestRepository->create($input);

        Flash::success('Lab Test saved successfully.');

        return redirect(route('labTests.index'));
    }

    /**
     * Display the specified LabTest.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $labTest = $this->labTestRepository->find($id);

        if (empty($labTest)) {
            Flash::error('Lab Test not found');

            return redirect(route('labTests.index'));
        }

        return view('lab_tests.show')->with('labTest', $labTest);
    }

    /**
     * Show the form for editing the specified LabTest.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $labTest = $this->labTestRepository->find($id);

        if (empty($labTest)) {
            Flash::error('Lab Test not found');

            return redirect(route('labTests.index'));
        }

        return view('lab_tests.edit')->with('labTest', $labTest);
    }

    /**
     * Update the specified LabTest in storage.
     *
     * @param int $id
     * @param UpdateLabTestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLabTestRequest $request)
    {
        $labTest = $this->labTestRepository->find($id);

        if (empty($labTest)) {
            Flash::error('Lab Test not found');

            return redirect(route('labTests.index'));
        }

        $labTest = $this->labTestRepository->update($request->all(), $id);

        Flash::success('Lab Test updated successfully.');

        return redirect(route('labTests.index'));
    }

    public function search(Request $request)
    {
      $request->validate([
        'query'=>'required|min:3',
      ]);

      $query = $request->input('query');

      $labTests = DB::table('lab_tests')->where('lt_name','like',"%$query%")
                        ->paginate(15);

      return view('lab_tests.search-results')->with('labTests', $labTests);
    }

    public function pdf_list(){
      $labTests = LabTest::all();
      $pdf = PDF::loadView('lab_tests.pdf1', compact('labTests'));
      return $pdf->download('lab_test_list.pdf');
    }

    /**
     * Remove the specified LabTest from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $labTest = $this->labTestRepository->find($id);

        if (empty($labTest)) {
            Flash::error('Lab Test not found');

            return redirect(route('labTests.index'));
        }

        $this->labTestRepository->delete($id);

        Flash::success('Lab Test deleted successfully.');

        return redirect(route('labTests.index'));
    }
}
