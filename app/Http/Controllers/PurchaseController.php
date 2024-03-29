<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Repositories\PurchaseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use PDF;
use App\Purchase;
use Gate;
class PurchaseController extends AppBaseController
{
    /** @var  PurchaseRepository */
    private $purchaseRepository;

    public function __construct(PurchaseRepository $purchaseRepo)
    {
        $this->purchaseRepository = $purchaseRepo;
    }

    /**
     * Display a listing of the Purchase.
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
        $purchases = $this->purchaseRepository->all();

        return view('purchases.index')
            ->with('purchases', $purchases);
    }

    /**
     * Show the form for creating a new Purchase.
     *
     * @return Response
     */
    public function create()
    {
        if(!Gate::allows('isAdmin') && !Gate::allows('isStaff')){
          abort(404, "Sorry, you're not authorize to do this");
        }
        return view('purchases.create');
    }

    /**
     * Store a newly created Purchase in storage.
     *
     * @param CreatePurchaseRequest $request
     *
     * @return Response
     */
    public function store(CreatePurchaseRequest $request)
    {
        $input = $request->all();

        $purchase = $this->purchaseRepository->create($input);

        Flash::success('Purchase saved successfully.');

        return redirect(route('purchases.index'));
    }

    /**
     * Display the specified Purchase.
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
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        return view('purchases.show')->with('purchase', $purchase);
    }

    /**
     * Show the form for editing the specified Purchase.
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
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        return view('purchases.edit')->with('purchase', $purchase);
    }

    /**
     * Update the specified Purchase in storage.
     *
     * @param int $id
     * @param UpdatePurchaseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePurchaseRequest $request)
    {
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        $purchase = $this->purchaseRepository->update($request->all(), $id);

        Flash::success('Purchase updated successfully.');

        return redirect(route('purchases.index'));
    }

    public function search(Request $request)
    {
      $request->validate([
        'query'=>'required|min:3',
      ]);

      $query = $request->input('query');

      $purchases = DB::table('purchases')->where('pur_item','like',"%$query%")
                        ->paginate(15);

      return view('purchases.search-results')->with('purchases', $purchases);
    }

    public function pdf_list(){
      $purchases = Purchase::all();
      $pdf = PDF::loadView('purchases.pdf1', compact('purchases'));
      return $pdf->download('purchase_list.pdf');
    }

    /**
     * Remove the specified Purchase from storage.
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
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        $this->purchaseRepository->delete($id);

        Flash::success('Purchase deleted successfully.');

        return redirect(route('purchases.index'));
    }
}
