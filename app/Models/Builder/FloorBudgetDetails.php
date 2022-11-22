<?php

namespace App\Models\Builder;

use App\Models\Projects\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FloorBudgetDetails extends Model
{
    use HasFactory,SoftDeletes;

    public function projectname(){
        return $this->belongsTo(Project::class,'project_id','id');
    }

    public function floorno(){
        return $this->belongsTo(FloorDetails::class,'floor_details_id','id');
    }
    
    public function unit(){
        return $this->belongsTo(Unit::class,'material_id','id');
    }
    // public function floor_budget_id(){
    //     return $this->hasMany(FlatDetail::class);
    // }
}