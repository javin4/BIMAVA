<?php

namespace App\Models;

use App\Traits\Uuids;
use App\Traits\belongsToProjectTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LV extends Model
{
    use HasFactory, Uuids; //belongsToProjectTrait;

    protected $table = "lvs";

    protected $guarded =[];

    public function belongsToProject(){
        // return $this->belongsTo(static::class);
         return $this->belongsTo(Project::class,'project_id');
     }

}
