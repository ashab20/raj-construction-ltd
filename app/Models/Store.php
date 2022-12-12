<?php

namespace App\Models;

use App\Models\Builder\Material;
use App\Models\Builder\MaterialDetail;
use App\Models\Builder\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id','id');
    }

    public function material(){
        return $this->belongsTo(Material::class, 'material_id','id');
    }

    public function materialDetails(){
        return $this->belongsTo(MaterialDetail::class, 'material_details_id','id');
    }
}
