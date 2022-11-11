<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\FlatDetail;
use Illuminate\Http\Request;

class FlatDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fdetail=FlatDetail::paginate(10);
        return view('flatDetail.index',compact('fdetail'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlatDetail  $flatDetail
     * @return \Illuminate\Http\Response
     */
    public function show(FlatDetail $flatDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlatDetail  $flatDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(FlatDetail $flatDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlatDetail  $flatDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlatDetail $flatDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlatDetail  $flatDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlatDetail $flatDetail)
    {
        //
    }
}
