<?php

namespace App;

use App\Domain;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [
        'name'
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
    public function schools(){
        return $this->belongsToMany(School::class);
    } 
    public function metiers(){
        return $this->belongsToMany(Metier::class);
    } 
}
