<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metier extends Model
{
    protected $fillable = [
        'name'
    ];
    public function schools(){
        return $this->belongsToMany(School::class);
    }
    public function series(){
        return $this->belongsToMany(Serie::class);
    } 
}
