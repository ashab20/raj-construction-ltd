<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\Builder\MaterialDetail;
use Illuminate\Http\Request;

class MaterialDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materialDetail=MaterialDetail::paginate(10);
        return view('materialDetails.index'.compact('materialDetail'));
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
     * @param  \App\Models\MaterialDetail  $materialDetail
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialDetail $materialDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialDetail  $materialDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialDetail $materialDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaterialDetail  $materialDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialDetail $materialDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialDetail  $materialDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialDetail $materialDetail)
    {
        //
    }
}
