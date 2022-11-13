<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\Builder\Material;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::paginate(10);
        return view('material.index',compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
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
            // squire_feet 	total_cost 	floor_budget_id 	material_detail_id 	sales_price 
            $material=new Material();
            $identity = decrypt(session()->get('roleIdentity'));
            $material->material_name = $request->materialName;
            $material->quantity_name = $request->qname;

            $material->created_by=Crypt::decrypt(session()->get('userId'));
            $material->status = 1;
            if($material->save()){
                return redirect($identity.'/material')->with('success','Data saved');
            }
        }
        catch(Exception $error){
            dd($error);
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Builder\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Builder\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        return view('material.edit',compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Builder\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        try{
            $mate = $material;
            $identity = decrypt(session()->get('roleIdentity'));
            $mate->material_name = $request->materialName;
            $mate->quantity_name = $request->qname;

            $mate->updated_by=Crypt::decrypt(session()->get('userId'));
            if($mate->save()){
                return redirect($identity.'/material')->with('success','Data saved');
            }
        }
        catch(Exception $error){
            dd($error);
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Builder\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $material->delete();
        return redirect()->back();
    }
}
