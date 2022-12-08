<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Management\Management;
use Illuminate\Http\Request;
use App\Models\Auth\User;
use App\Models\Management\Team;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managements = Management::paginate(10);
        $users = User::whereIn('designation_id', [1, 2, 3])->get();
        return view('Management.list', compact('managements', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $users = User::whereIn('designation_id', [1,2,3])->get();

        $sql = "SELECT * From users usr JOIN user_details ud ON usr.id=ud.user_id JOIN designations degi on degi.id=ud.designation_id where degi.id IN(1,2,3)";

        // $users = DB::select($sql);

        $users = DB::table('users')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->join('designations', 'designations.id', '=', 'user_details.designation_id')
            ->select('users.*', 'designations.*')
            ->whereIn('user_details.designation_id', [1,2,3])
            ->get();
        $teams = Team::all();
        return view('Management.create', compact('users','teams'));
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
        $management = New Management();
        $management->project_director = $request->projectmanager;
        $management->architecture = $request->architecture;
        $management->civil_engineer = $request->civilengineer;
        $management->project_id = decrypt($request->project);
        // $management->company_id = $request->company;
        $management->team_id = $request->team;

        $management->created_by = Crypt::decrypt(session()->get('userId'));
            $management->status = 1;
            $identity = decrypt(session()->get('roleIdentity'));

            if ($management->save()) {
                return redirect(route('project.show',$management->project_id))->with($this->resMessageHtml(true, false, 'management created successfully'));
            }else{
                return redirect()->back()->with($this->resMessageHtml(false, 'error', 'Cannot create management, Please try again'));
            }
        } catch (Exception $err) {
            dd($err);
            return redirect()->back()->with($this->resMessageHtml(false, 'error', 'Cannot create management, Please try again'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function show(Management $management)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function edit(Management $management)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Management $management)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function destroy(Management $management)
    {
        $management->delete();
        return redirect()->back();
    }
}
