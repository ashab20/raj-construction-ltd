<?php

namespace App\Models\Stock;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectStore extends Model
{
    use HasFactory,SoftDeletes;

    // public function unit(){
    //     return $this->belongsTo(Unit::class, 'unit_id','id');
    // }

    // public function material(){
    //     return $this->belongsTo(Material::class, 'material_id','id');
    // }

    // public function materialDetails(){
    //     return $this->belongsTo(MaterialDetail::class, 'material_details_id','id');
    // }
}
