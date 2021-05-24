<?php

namespace App;
use App\School;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 
    ];
    public function orientations(){
        return $this->hasMany(Orientation::class);
    }
    public function schools(){
        return $this->hasMany(School::class);
    }
}
