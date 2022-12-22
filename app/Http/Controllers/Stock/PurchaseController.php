<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTraits;
use App\Models\Builder\Material;
use App\Models\Stock\Purchase;
use App\Models\Stock\PurchaseDetails;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    use ResponseTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchaseDetails = PurchaseDetails::all();
        // $purchases = Purchase::paginate(10);
        // SELECT * FROM purchases JOIN materials on purchases.id=materials.purchase_id JOIN units on materials.unit_id=units.id

        // Users::join('user_details', 'users.id', '=', 'user_details.user_id')
        //     ->join('designations', 'designations.id', '=', 'user_details.designation_id')
        //     ->select('users.*', 'designations.*')
        //     ->whereIn('user_details.designation_id', [1,2,3])
        //     ->get();

        $purchases = Purchase::join('materials','purchases.id','=','materials.purchase_id')->join('units','materials.unit_id','=','units.id')->select('purchases.*','units.name','units.quantity_name','units.quantity','purchases.total_cost','purchases.payment','purchases.purchase_date')->paginate(10);

        return view('stock.purchase.index',compact('purchaseDetails','purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock.purchase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request['outer-list'][0]['name']);
        DB::beginTransaction();
        try{
            $purchase = new Purchase();
            if ($request->hasFile('voucher')) {
                $imageName = rand(111, 999) . time() . '.' . $request->voucher->extension();
                $request->voucher->move(public_path('uploads/purchase'), $imageName);
                $purchase->voucher = $imageName;
            }
            $purchase->purchase_date = $request->date;
            $purchase->note = $request->note;
            $purchase->tax = $request->tax;
            $purchase->discount = $request->discount;
            $purchase->total_cost = $request->total;
            $purchase->payment = $request->payment;
            $purchase->status = 1;
            $purchase->created_by = Crypt::decrypt(session()->get('userId'));
            $purchase->purchase_by = Crypt::decrypt(session()->get('userId'));
            $identity = decrypt(session()->get('roleIdentity'));
            // materials
            if($purchase->save()){
                foreach($request['outer-list'] as $material){
                    
                    // dd($material);
                    $materials = new Material();
                    $materials->purchase_id =  $purchase->id;
                    $materials->brand = $material['brand'];
                    $materials->unit_id = $material['name'];
                    $materials->qty = $material['qty'];
                    $materials->per_unit_price = $material['per_unit_price'];
                    $materials->created_by = Crypt::decrypt(session()->get('userId'));
                    $materials->status = 1;

                    if($materials->save()){

                        $purchaseDetails = new PurchaseDetails();
                        $purchaseDetails->material_id = $materials->id;
                        $purchaseDetails->purchase_id = $purchase->id;        
                        $purchaseDetails->price = $material['price'];
                        $purchaseDetails->tax = $request->tax;
                        $purchaseDetails->discount = $request->discount;
                        $purchaseDetails->sub_total = $request->subtotal;
                        $purchaseDetails->status = 1;
                        $purchaseDetails->created_by = Crypt::decrypt(session()->get('userId'));

                        if($purchaseDetails->save()){

                            DB::commit();
                            return redirect(route('purchase.index'))->with($this->resMessageHtml(true, false, 'Purchase created successfully'));

                            // dd($materials);
                            // $stocks = new Store();
                            // $stocks->material_id = $materials->id;
                            // $stocks->unit_id =  $materials->id;
                            // $stocks->material_id = $material['name'];
                            // $stocks->status = 1;
                            // $stocks->created_by = Crypt::decrypt(session()->get('userId'));
                            // if($stocks->save()){
                        }  
                    } 
                }
            } 
        }catch(Exception $err){
            dd($err);
            DB::rollBack();
            return back()->withInput();
        }
    }

}
