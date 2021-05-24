<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientation extends Model
{
    


    protected $fillable = [
    'type_ecole','country','metier','city_id','BAC','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function serie(){
        return $this->belongsTo(Serie::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function faculties(){
        return $this->belongsToMany(faculty::class);
    }
}
