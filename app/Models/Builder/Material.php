<?php

namespace App\Models\Builder;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use HasFactory,SoftDeletes;

    public function units(){
        return $this->belongsTo(Unit::class,'unit_id','id');
    }

    // public function material(){
    //     return $this->hasMany(Store::class, 'material_id','id');
    // }

}
