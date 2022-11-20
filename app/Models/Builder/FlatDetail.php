<?php

namespace App\Models\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlatDetail extends Model
{
    use HasFactory,SoftDeletes;

    public function flat(){
        return $this->belongsTo(Flat::class);
    }
}
