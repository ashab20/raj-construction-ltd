<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTraits;
use App\Models\Auth\User;
use App\Models\Lands\Land;
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
            dd($request);
            $project = new Project();
            $project->project_name = $request->projectNameInputField;
            // $project->project_name = $request->landownerdata;
            $project->project_overview = $request->projectOverview;

            $project->start_date = $request->parojectStarDate;
            $project->end_date = $request->parojectEndDate;
            $project->budget = $request->totalBudget;
            $project->project_image = $request->projectImage;
            $project->user_id = $request->landownerdata;
            $project->stage_id = 1;
            $project->status = $request->projectNameInputField;

            // lands table
            // user_id 	squire_feet 	house_no 	block 	road_no 	address 	document_id 	design_id 	total_budget 	total_cost 	status

            $land = new Land();
            $land->land_area = $request->ploatArea;
            $land->plot_area_counter = $request->plotAreaCounter;
            $land->building_area = $request->BuildingArea;
            $land->Building_area_counter = $request->BuildingAreaCounter;
            $land->building_height = $request->BuildingHeight;
            $land->Building_height_counter = $request->BuildingHeightCounter;
            $land->house_no = $request->squireFeet;
            $land->road_no = $request->squireFeet;
            $land->total_budget = $request->squireFeet;
            $land->country_id = $request->squireFeet;
            $land->division_id = $request->squireFeet;
            $land->district_id = $request->squireFeet;

            // design tables

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
