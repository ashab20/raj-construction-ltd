<?php

namespace App\Models\Builder;

use App\Models\Stock\Purchase;
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

    public function materials(){
        return $this->belongsTo(Purchase::class, 'purchase_id','id');
    }

}
