<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTraits;
use Exception;
use App\Models\FloorDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FloorDetailsController extends Controller
{
    use ResponseTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floorDetails=FloorDetails::paginate(10);
        return view('floorDetails.index',compact('floorDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('floorDetails.create');
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
            $fdetails= new FloorDetails();
            $identity = decrypt(session()->get('roleIdentity'));
            $fdetails->floor_no=$request->floorNo;
            $fdetails->total_squire_feet=$request->tsFeet;
            $fdetails->total_cost=$request->tCost;
            $fdetails->total_budget=$request->tBudget;
            $fdetails->material_id=$request->mId;
            $fdetails->created_by=Crypt::decrypt(session()->get('userId'));

            $fdetails->status=1;
            if($fdetails->save()){
                return redirect($identity.'/floorDetails')->with($this->resMessageHtml(true, false, 'Fllor details created successfully'));
            }
        }
        catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->resMessage(false, 'error', 'Cannot create floor details'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FloorDetails  $floorDetails
     * @return \Illuminate\Http\Response
     */
    public function show(FloorDetails $floorDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FloorDetails  $floorDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(FloorDetails $floorDetails)
    {
        return view('floorDetails.edit',compact('floorDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FloorDetails  $floorDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FloorDetails $floorDetails)
    {
        try{
            $identity = decrypt(session()->get('roleIdentity'));
            $fdetails= $floorDetails;
            $fdetails->floor_no = $request->floorNo;
            $fdetails->total_squire_feet = $request->tsFeet;
            $fdetails->total_cost = $request->tCost;
            $fdetails->total_budget = $request->tBudget;
            $fdetails->material_id = $request->mId;

            if($fdetails->save()){
                return redirect($identity.'/floorDetails')->with('success','Data saved');
            }
        }
        catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->resMessage(false, 'error', 'Cannot update floor details'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FloorDetails  $floorDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(FloorDetails $floorDetails)
    {
        //
    }
}
