<?php

namespace App;

use App\City;
use App\faculty;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name','city_id','description','localisation','langue_formation','TypeUniversité','logo'
    ];
    public function faculties(){
        return $this->belongsToMany(faculty::class);
    } 
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function metiers(){
        return $this->belongsToMany(Metier::class);
    } 
    public function series(){
        return $this->belongsToMany(Serie::class);
    } 
}
