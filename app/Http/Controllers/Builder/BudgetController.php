<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\Builder\Budget;
use App\Models\Builder\FloorDetails;
use App\Models\Builder\Foundation;
use App\Models\Projects\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::paginate(10);
        return view('budget.index',compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectname = Project::all();
        $floorno = FloorDetails::all();
        $foundation = Foundation::all();
        return view('budget.create',compact('projectname','floorno','foundation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *  	project_id  floor_id  foundation_id 	total_working_day 	total_worker 	issus_date
     */
    public function store(Request $request)
    {
        try{
            $material = new Budget();
            $material->project_id = $request->projectName;
            $material->floor_id = $request->floorno;
            $material->foundation_id = $request->pilesheight;
            $material->total_working_day = $request->totalday;
            $material->total_worker = $request->tworker;
            $material->issus_date = $request->issuedate;

            $material->status = 1;
            $material->created_by = Crypt::decrypt(session()->get('userId'));
            $identity = decrypt(session()->get('roleIdentity'));

            if($material->save()){
                return redirect($identity.'/budget')->with('success','Data saved');
            }
        }catch(Exception $err){
            dd($err);
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit(Budget $budget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $budget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budget $budget)
    {
        $budget->delete();
        return redirect()->back();
    }
}
