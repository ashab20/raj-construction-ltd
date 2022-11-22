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
        return view('testdetail.create');
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
            $testdetail=new testdetail();
            $identity = decrypt(session()->get('roleIdentity'));
            
            $testdetail->created_by=decrypt(session()->get('userId'));
            $testdetail->test_name=$request->tname;
            $testdetail->test_status=$request->tstatus;
            $testdetail->comments=$request->com;
           
            
            $testdetail->status = 1;
            if($testdetail->save()){
                return redirect($identity.'/testDetail')->with('success','Data saved');
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
        return view ('testdetail.edit',compact('testDetail'));
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
        try{
           $identity = decrypt(session()->get('roleIdentity'));
           $user = decrypt(session()->get('userId'));
           $testdetail=$testDetail;
           $testdetail->test_name=$request->tname;
           $testdetail->test_status=$request->tstatus;
           $testdetail->comments=$request->com;
           $testdetail->updated_by = $user;
           // $builder->builder=$request->buildername;
           $testdetail->status = 1;
           if($testdetail->save()){
               return redirect($identity.'/testDetail')->with('success','Data saved');
           }
       }
       catch(Exception $e){
           dd($e);
           return back()->withInput();
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestDetail  $testDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestDetail $testDetail)
    {
        $testDetail->delete();
        return redirect()->back();
    }
}
