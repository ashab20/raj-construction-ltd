<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\FlatDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FlatDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fdetail=FlatDetail::paginate(10);
        return view('flatDetail.index',compact('fdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flatDetail.create');
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
            // squire_feet 	total_cost 	floor_budget_id 	material_detail_id 	sales_price 
            $fd=new FlatDetail();
            $identity = decrypt(session()->get('roleIdentity'));
            $fd->squire_feet = $request->squireFeet;
            $fd->total_budget = $request->houseNo;
            $fd->total_cost = $request->block;
            $fd->sales_price = $request->roadNo;

            $fd->created_by=Crypt::decrypt(session()->get('userId'));
            $fd->status = 1;
            if($fd->save()){
                return redirect($identity.'/land')->with('success','Data saved');
            }
        }
        catch(Exception $e){
            dd($e);
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlatDetail  $flatDetail
     * @return \Illuminate\Http\Response
     */
    public function show(FlatDetail $flatDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlatDetail  $flatDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(FlatDetail $flatDetail)
    {
        return view('');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlatDetail  $flatDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlatDetail $flatDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlatDetail  $flatDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlatDetail $flatDetail)
    {
        //
    }
}
