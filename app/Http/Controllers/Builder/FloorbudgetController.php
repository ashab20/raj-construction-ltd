<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\Builder\FloorBudget;
use Illuminate\Http\Request;

class FloorbudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floorbudget= FloorBudget::paginate(10);
        return view('floorBudget.index',compact('floorbudget'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $floorbudget=FloorDetails::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Builder\Floorbudget  $floorbudget
     * @return \Illuminate\Http\Response
     */
    public function show(Floorbudget $floorbudget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Builder\Floorbudget  $floorbudget
     * @return \Illuminate\Http\Response
     */
    public function edit(Floorbudget $floorbudget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Builder\Floorbudget  $floorbudget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Floorbudget $floorbudget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Builder\Floorbudget  $floorbudget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Floorbudget $floorbudget)
    {
        //
    }
}
