<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\Builder\BuilderOption;
use Illuminate\Http\Request;
use Exception;

class BuilderOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $builders=BuilderOption::paginate(10);
        return view('builder.index',compact('builders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('builder.create');  
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
            $builder=new BuilderOption();
            $identity = decrypt(session()->get('roleIdentity'));
            
            $builder->created_by=decrypt(session()->get('userId'));
            $builder->name=$request->buildername;
           
            
            $builder->status = 1;
            if($builder->save()){
                return redirect($identity.'/builder')->with('success','Data saved');
            }
        }
        catch(Exception $e){
            dd($e);
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Builder\BuilderOption  $builderOption
     * @return \Illuminate\Http\Response
     */
    public function show(BuilderOption $builderOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Builder\BuilderOption  $builderOption
     * @return \Illuminate\Http\Response
     */
    public function edit(BuilderOption $builderOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Builder\BuilderOption  $builderOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuilderOption $builderOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Builder\BuilderOption  $builderOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuilderOption $builderOption)
    {
        //
    }
}
