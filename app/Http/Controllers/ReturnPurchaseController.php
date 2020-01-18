<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReturnPurchaseRequest;
use App\Http\Requests\UpdateReturnPurchaseRequest;
use App\Repositories\ReturnPurchaseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Gate;
class ReturnPurchaseController extends AppBaseController
{
    /** @var  ReturnPurchaseRepository */
    private $returnPurchaseRepository;

    public function __construct(ReturnPurchaseRepository $returnPurchaseRepo)
    {
        $this->returnPurchaseRepository = $returnPurchaseRepo;
    }

    /**
     * Display a listing of the ReturnPurchase.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isStaff')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $returnPurchases = $this->returnPurchaseRepository->all();

        return view('return_purchases.index')
            ->with('returnPurchases', $returnPurchases);
    }

    /**
     * Show the form for creating a new ReturnPurchase.
     *
     * @return Response
     */
    public function create()
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isStaff')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        return view('return_purchases.create');
    }

    /**
     * Store a newly created ReturnPurchase in storage.
     *
     * @param CreateReturnPurchaseRequest $request
     *
     * @return Response
     */
    public function store(CreateReturnPurchaseRequest $request)
    {
        $input = $request->all();

        $returnPurchase = $this->returnPurchaseRepository->create($input);

        Flash::success('Return Purchase saved successfully.');

        return redirect(route('returnPurchases.index'));
    }

    /**
     * Display the specified ReturnPurchase.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isStaff')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $returnPurchase = $this->returnPurchaseRepository->find($id);

        if (empty($returnPurchase)) {
            Flash::error('Return Purchase not found');

            return redirect(route('returnPurchases.index'));
        }

        return view('return_purchases.show')->with('returnPurchase', $returnPurchase);
    }

    /**
     * Show the form for editing the specified ReturnPurchase.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isStaff')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        $returnPurchase = $this->returnPurchaseRepository->find($id);

        if (empty($returnPurchase)) {
            Flash::error('Return Purchase not found');

            return redirect(route('returnPurchases.index'));
        }

        return view('return_purchases.edit')->with('returnPurchase', $returnPurchase);
    }

    /**
     * Update the specified ReturnPurchase in storage.
     *
     * @param int $id
     * @param UpdateReturnPurchaseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReturnPurchaseRequest $request)
    {
        $returnPurchase = $this->returnPurchaseRepository->find($id);

        if (empty($returnPurchase)) {
            Flash::error('Return Purchase not found');

            return redirect(route('returnPurchases.index'));
        }

        $returnPurchase = $this->returnPurchaseRepository->update($request->all(), $id);

        Flash::success('Return Purchase updated successfully.');

        return redirect(route('returnPurchases.index'));
    }

    /**
     * Remove the specified ReturnPurchase from storage.
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
        $returnPurchase = $this->returnPurchaseRepository->find($id);

        if (empty($returnPurchase)) {
            Flash::error('Return Purchase not found');

            return redirect(route('returnPurchases.index'));
        }

        $this->returnPurchaseRepository->delete($id);

        Flash::success('Return Purchase deleted successfully.');

        return redirect(route('returnPurchases.index'));
    }
}
