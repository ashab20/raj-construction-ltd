<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTraits;
use App\Models\Auth\User;
use App\Models\Projects\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Crypt;

class ProjectsController extends Controller
{
    use ResponseTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        return view('Projects.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $landOwner = User::where('role_id', 4)->get();
        return view('Projects.create',compact('landOwner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // project_name 	project_overview 	start_date 	end_date 	budget 	user_id 	status
        try{
            $store = new Project();
            $store->project_name = $request->projectNameInputField;
            $store->project_overview = $request->projectNameInputField;

            $store->start_date = $request->projectNameInputField;
            $store->end_date = $request->projectNameInputField;
            $store->budget = $request->projectNameInputField;
            $store->user_id = $request->projectNameInputField;
            $store->stage_id = 1;
            $store->status = $request->projectNameInputField;

            // design tables

            // lands table

        }catch(Exception $err){
            return redirect()->route('')->with($this->resMessageHtml(false,'error','Cannot create Project, Please try again'));
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
