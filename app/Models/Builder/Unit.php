<?php

namespace App\Models\Builder;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory,SoftDeletes;

    public function unit(){
        return $this->hasMany(Store::class, 'unit_id','id');
    }

}
