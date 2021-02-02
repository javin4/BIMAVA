<?php

namespace App\Models;

use App\Models\LV;
use App\Traits\Uuids;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory, Uuids;

    protected $guarded =[];

    public function lvs(){
        return $this->hasMany(LV::class,'project_id');
    }

   /* public function lvs(){
        return $this->hasMany(LV::class,'project_id');
    }*/
    //felder
    //projectstatus
    //1aktuelle Projektphase nach LM.VM? bzw andere Gliederungsformen...
    //Projektart.


}
