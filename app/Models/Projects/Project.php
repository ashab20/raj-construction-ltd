<?php

namespace App\Models\Projects;

use App\Models\Builder\Design;
use App\Models\Lands\Land;
use App\Models\Projects\Stage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
    use HasFactory,SoftDeletes;

    public function stage(){
        return $this->belongsTo(Stage::class);
    }

    public function land(){
        return $this->hasMany(Land::class);
    }

    public function design(){
        return $this->hasMany(Design::class);
    }
}


