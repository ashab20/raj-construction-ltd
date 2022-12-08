<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTraits;
use App\Models\Builder\BuilderOption;
use App\Models\Management\Team;
use App\Models\worker;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Queue\Worker as QueueWorker;
use Illuminate\Support\Facades\Crypt;

class TeamController extends Controller
{
    use ResponseTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(10);
        return view('Team.list', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workers = worker::all();
        $builderOptions = BuilderOption::all();
        return view('Team.create', compact('workers', 'builderOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        try {
            $team = new Team();
            $team->team_name = $request->teamName;
            $team->builder_options_id = $request->builderOptions;
            $team->team_leader = $request->teamLeader;
            $team->worker_id = json_encode($request->worker);


            $team->created_by = Crypt::decrypt(session()->get('userId'));
            $team->status = 1;
            $identity = decrypt(session()->get('roleIdentity'));

            if ($team->save()) {
                return redirect(route('team.index'))->with($this->resMessageHtml(true, false, 'Team created successfully'));
            }else{
                return redirect()->back()->with($this->resMessageHtml(false, 'error', 'Cannot create Team, Please try again'));
            }
        } catch (Exception $err) {
            dd($err);
            return redirect()->back()->with($this->resMessageHtml(false, 'error', 'Cannot create Team, Please try again'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Builder\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Builder\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('Team.list', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Builder\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Builder\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        $team->delete();
        return redirect()->back();
    }
}
