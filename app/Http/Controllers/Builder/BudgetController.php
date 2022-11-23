<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\Builder\Budget;
use App\Models\Builder\BudgetDetails;
use App\Models\Builder\FloorDetails;
use App\Models\Builder\Foundation;
use App\Models\Projects\Project;
use Illuminate\Support\Facades\Crypt;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // try{
        //     $bd = new Budget();
        //     $bd->project_id = $request->projectName;
        //     $bd->floor_id = $request->floorno;
        //     $bd->foundation_id = $request->pilesheight;
        //     $bd->total_working_day = $request->totalday;
        //     $bd->total_worker = $request->tworker;
        //     $bd->issus_date = $request->issuedate;

        //     $bd->status = 1;
        //     $bd->created_by = Crypt::decrypt(session()->get('userId'));
        //     $identity = decrypt(session()->get('roleIdentity'));

        //     if($bd->save()){
        //         return redirect($identity.'/budget')->with('success','Data saved');
        //     }
        // }catch(Exception $err){
        //     dd($err);
        //     return back()->withInput();
        // }

        //  	id 	created_at 	updated_at 	project_id name 	floor_id floor no 	foundation_id 	total_working_day 	total_worker 	issus_date 	status 	created_by 	updated_by 	deleted_at 	
        dd($request);
        
        try {
            DB::beginTransaction();

            $budget = new Budget();
            $budget->project_id = $request->project;
            if($request->foundation_id){
                $budget->foundation_id = $request->foundation;
            }else if($request->floorno){
                $budget->floor_id = $request->floorno;
            }
            
            $budget->total_working_day = $request->working_day;
            $budget->worker = $request->total_worker;
            $budget->issus_date = $request->issus_date;
            $budget->status = 1;
            $budget->created_by =  Crypt::decrypt(session()->get('userId'));

            if($budget){
                $total = null;
                foreach($request->outer_list as $material){
                    // id 	created_at 	updated_at 	project_id
                    // building_name 	floor_details_id
                    // floor_no 	material_id 	budget_quantity 	market_price 	total_budget 	issues_date 	status 	created_by 	updated_by 	deleted_a
                    $material = new BudgetDetails();
                    $material->units_id = $request->material_id;
                    $material->market_price = $request->price;
                    $material->budget_quantity = $request->quantity;
                    $material->created_by =  Crypt::decrypt(session()->get('userId'));
                    $subtotal = $material->market_price * $material->quantity;
                    $total.=$subtotal;
                }
            }       

            DB::commit();
        } catch (Exception $err) {
            dd($err);
            DB::rollBack();
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
        $projectname = Project::all();
        $floorno = FloorDetails::all();
        $foundation = Foundation::all();
        return view('budget.edit',compact('budget','projectname','floorno','foundation'));
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
        try{
            $material = $budget;
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
