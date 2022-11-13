<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;
use PhpParser\Node\Stmt\TryCatch;

class UserDetails extends RoutingController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
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
            // user_id 	designation_id 	father_name 	mother_name 	bio 	gender 	resume 	present_address 	present_country_id 	present_division_id 	present_district_id 	permanent_address 	permanent_country_id 	permanent_division_id 	permanent_district_id 	status

            
            $store = new UserDetails();
            $store->bio = $request->userBio;
            $store->father_name = $request->fathername;
            $store->mother_name = $request->mothername;
            $store->gender = $request->usergender;
            $store->designation_id = $request->designation;
            
            if($request->resume){
                $store->resume = $request->resume;
            }

            $store->present_address = $request->preaddress;
            $store->present_country_id = $request->country;
            $store->present_division_id = $request->division;
            $store->present_district_id = $request->district;
            $store->permanent_address = $request->peraddress;
            $store->permanent_country_id = $request->slectcountry;
            $store->permanent_division_id = $request->slectdivision;
            $store->permanent_district_id = $request->slectdistrict;
            $store->status = 1;
            dd($store);

        }catch(Exception $err){

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
