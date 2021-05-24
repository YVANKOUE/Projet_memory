<?php

namespace App;

use App\School;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    
    protected $fillable = [
        'name','img'
    ];
    public function schools(){
        return $this->belongsToMany(School::class);
    }
    public function matieres(){
        return $this->belongsToMany(Matiere::class);
    }
}