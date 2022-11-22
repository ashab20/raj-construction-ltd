<?php

namespace App\Models\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestDetail extends Model
{
    use HasFactory, SoftDeletes;

    public function projectname(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
