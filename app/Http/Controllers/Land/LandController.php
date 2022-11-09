<?php

namespace App\Http\Controllers\Land;

use App\Http\Controllers\Controller;
use App\Models\Lands\Land;
use Illuminate\Http\Request;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lands=Land::paginate(10);
        return view('Land.index',compact('Lands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Land.create');
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
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function show(Land $land)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function edit(Land $land)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Land $land)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function destroy(Land $land)
    {
        //
    }
}
