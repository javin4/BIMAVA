<?php

namespace App\Traits;

trait belongsToProjectTrait
{
    protected $parentColumn = 'project_id';

    public function belongsToProject(){
        return $this->belongsTo(static::class);
    }
    /*
    public function children(){
        return $this->hasMany(static::class, $this->parentColumn);
    }

    public function allChildren(){
        return $this->children()->with('allChildren');
    }

    public function root(){
        return $this->parent
            ? $this->parent->root()
            : $this;
    }
    */
}