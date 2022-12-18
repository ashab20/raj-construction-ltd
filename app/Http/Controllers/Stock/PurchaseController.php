<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Models\Builder\Material;
use App\Models\Stock\Purchase;
use App\Models\Stock\PurchaseDetails;
use Exception;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::paginate(10);
        return view('stock.purchase.index',compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock.purchase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $purchase = new Purchase();


            $purchase->voucher = $request->voucher;
            $purchase->purchase_date = $request->date;
            $purchase->tax = $request->tax;
            $purchase->discount = $request->discount;
            $purchase->total_cost = $request->total;
            $purchase->payment = $request->payment;

            $purchase = new Material();
            $purchase->unit_id = $request->name;
            $purchase->brand = $request->brand;
            $purchase->per_unit_price = $request->per_unit_price;
            $purchase->qty = $request->qty;

            $purchase = new PurchaseDetails();
            $purchase->price = $request->price;

        }catch(Exception $err){

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
