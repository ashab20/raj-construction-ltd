<?php

namespace App\Models\Stock;

use App\Models\Builder\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use HasFactory,SoftDeletes;

    public function name(){
        return $this->belongsTo(Unit::class,'unit_id','id');
    }
}
