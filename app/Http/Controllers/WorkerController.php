<?php

namespace App\Http\Controllers;

use App\Models\worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = worker::paginate(10);
        return view('worker.index',compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('worker.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        dd($request);
        try {
        $worker = new Worker();
        
        $worker->name = $request->name;
        $worker->father_name = $request->fname;
        $worker->mother_name = $request->mname;
        $worker->nid_birth_Cirtificate = $request->nbcertificate;
        $worker->dob = $request->dob;
        $worker->attachment = $request->attachment;
        $worker->present_address = $request->preaddress;
        $worker->permanent_address = $request->peraddress;

        $worker->present_country_id = $request->slectcountry;
        $worker->present_address = $request->preaddress;
        $worker->present_division_id = $request->slectdivision;
        $worker->present_district_id = $request->slectdistrict;

        $worker->permanent_address = $request->peraddress;
        $worker->permanent_country_id = $request->phone;
        $worker->permanent_division_id = $request->phone;
        $worker->permanent_district_id = $request->phone;
        
        if(worker->save()){
            return redirect($identity.'/worker')->with('success','Data saved');
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
     * @param  \App\Models\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(worker $worker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, worker $worker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(worker $worker)
    {
        $worker->delete();
        return redirect()->route('worker.index');
    }
}
