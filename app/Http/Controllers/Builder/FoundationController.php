<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\Builder\Foundation;
use Illuminate\Http\Request;

class FoundationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foundations = Foundation::paginate(10);
        return view('foundation.index',compact('foundations'));
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
     * @param  \App\Models\Foundation  $foundation
     * @return \Illuminate\Http\Response
     */
    public function show(Foundation $foundation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foundation  $foundation
     * @return \Illuminate\Http\Response
     */
    public function edit(Foundation $foundation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foundation  $foundation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foundation $foundation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foundation  $foundation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foundation $foundation)
    {
        $foundation->delete();
        return redirect()->back();
    }
}
