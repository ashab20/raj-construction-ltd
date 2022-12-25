<?php

namespace App\Models\Stock;

use App\Models\Auth\User;
use App\Models\Builder\Material;
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

    public function purchase(){
        return $this->belongsTo(User::class,'purchase_by','id');
    }

    public function materials(){
        return $this->hasMany(Material::class,'purchase_id','id');
    }
}
