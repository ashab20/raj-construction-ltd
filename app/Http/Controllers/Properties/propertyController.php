<?php

namespace App\Http\Controllers\Properties;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\property as Property;
use Illuminate\Support\Facades\Crypt;

class propertyController extends Controller
{
    public function getAllPropertyData()
    {

        return Property::paginate(15);
    }
    public function getSinglePropertyData($id)
    {
        $property = Property::find($id)->first();
        return $property;
    }

    public function storePropertyData(Request $request)
    {
        return $request["project_id"].$request["floor_details_id"].$request["total_squire_feet"].$request["installment_duration"].$request["total_cost"].$request["selling_price"];

        try {
            $store = new Property();	

            $store->project_id = $request["project_id"];
            $store->floor_details_id = $request["floor_details_id"];
            $store->total_squire_feet = $request["total_squire_feet"];
            $store->total_installment = $request["total_installment"];
            $store->installment_duration = $request["installment_duration"];
            $store->total_cost = $request["total_cost"];
            $store->selling_price = $request["selling_price"];
            $store->created_by = Crypt::decrypt(session()->get('userId'));

            if($store->save()){
                // return $property;
                return response('Saved',201);
            }
        } catch (Exception $err) {
            return 'cannot saved';
        }
    }

    public function updatePropertyData()
    {
    }
    public function DeletePropertyData()
    {
    }
}
