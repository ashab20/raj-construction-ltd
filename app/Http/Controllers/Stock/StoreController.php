<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Models\Builder\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $stores = DB::select("SELECT *, (
            CASE
                WHEN units.id = materials.unit_id THEN SUM(materials.qty) ELSE 0 END
            ) as total_qty
        from materials JOIN units on units.id = materials.unit_id
        GROUP BY materials.qty,unit_id");

        // $stores = DB::table('materials')->selectRaw(" *, (
        //     CASE
        //         WHEN units.id = materials.unit_id THEN SUM(materials.qty) ELSE 0 END
        //     ) as total_qty 
        // from materials JOIN units on units.id = materials.unit_id
        // GROUP BY materials.qty,unit_id");


        // $stores = DB::table("SELECT *, (
        //     CASE
        //         WHEN units.id = materials.unit_id THEN SUM(materials.qty) ELSE 0 END
        //     ) as total_qty")->join('units','units.id','=','materials.unit_id')->groupBy(['materials.qty','unit_id'])->get();

        return view('Stock.index',compact('stores'));
    }
}
