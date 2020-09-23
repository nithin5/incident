<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;
    public function people() { 
            return $this->hasMany('App\Models\IncidentPeople');    
    }
    public function category() {
            return $this->belongsTo('App\Models\Category');     
    }
}
