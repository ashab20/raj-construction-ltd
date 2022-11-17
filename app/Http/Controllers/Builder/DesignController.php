<?php

namespace App\Http\Controllers\Builder;

use App\Models\Builder\Design;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;


class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $design=Design::paginate(10);
        return view('Design.index',compact('design'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Design.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredesignRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $design=new Design;
            $identity = decrypt(session()->get('roleIdentity'));
            $design->designer_id=$request->desiname;
            if($request->hasFile('document')){
                $imageName = rand(111,999).time().'.'.$request->document->extension();  
                $request->document->move(public_path('uploads/design'), $imageName);
                $design->document = $imageName;
            }
            $design->building_squire_feet=$request->bsfeet;
            $design->total_floor_number=$request->tfnumber;
            $design->design_details=$request->designdetails;
            
            $design->status = 1;
            if($design->save()){
                return redirect($identity.'/design')->with('success','Data saved');
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
     * @param  \App\Models\design  $design
     * @return \Illuminate\Http\Response
     */
    public function show(design $design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\design  $design
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $designDetails=Design::find(decrypt($id));
        return view('Design.edit',compact('designDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedesignRequest  $request
     * @param  \App\Models\design  $design
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $identity = decrypt(session()->get('roleIdentity'));
            $design = Design::find($id);
            $design->designer_id=$request->desiname;
            if($request->hasFile('document')){
                $imageName = rand(111,999).time().'.'.$request->document->extension();  
                $request->document->move(public_path('uploads/design'), $imageName);
                $design->document = $imageName;
            }
            $design->building_squire_feet=$request->bsfeet;
            $design->total_floor_number=$request->tfnumber;
            $design->design_details=$request->designdetails;
            
            $design->status = 1;
            if($design->save()){
                return redirect($identity.'/design')->with('success','Data saved');
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
     * @param  \App\Models\design  $design
     * @return \Illuminate\Http\Response
     */
    public function destroy(design $design)
    {
        $design->delete();
        return redirect()->route('design.index');

    }
}