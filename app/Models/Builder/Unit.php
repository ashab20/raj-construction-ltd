<?php

namespace App\Models\Builder;

use App\Models\Stock\Purchase;
use App\Models\Stock\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory,SoftDeletes;

    public function name(){
        return $this->belongsTo(Purchase::class,'unit_id','id');
    }

}
