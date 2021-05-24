<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $fillable = [
        'name'
    ];
    public function faculties(){
        return $this->belongsToMany(faculty::class);
    }
}
