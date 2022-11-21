<?php

namespace App\Http\Controllers\Builder;
use App\Http\Controllers\Controller;
use App\Models\Builder\TestDetail;
use Illuminate\Http\Request;

use Exception;

class TestDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testdetail=testdetail::paginate(10);
        return view('testdetail.index',compact('testdetail'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return views('Builder.create');
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
     * @param  \App\Models\TestDetail  $testDetail
     * @return \Illuminate\Http\Response
     */
    public function show(TestDetail $testDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestDetail  $testDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(TestDetail $testDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestDetail  $testDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestDetail $testDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestDetail  $testDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestDetail $testDetail)
    {
        //
    }
}
