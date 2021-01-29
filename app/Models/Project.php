<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory, Uuids;

   /* public function lvs(){
        return $this->hasMany(LV::class,'project_id');
    }*/
}
