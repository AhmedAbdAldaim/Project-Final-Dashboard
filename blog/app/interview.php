<?php

namespace App;
use App\doctor;
use App\pichant;
use App\examination;
use App\medicine;
use Illuminate\Database\Eloquent\Model;

class interview extends Model
{
    public function doctor(){
        return $this->belongsTo(doctor::class);
    }
    public function pichant(){
        return $this->belongsTo(pichant::class);
    }
    public function medicines(){
        return $this->hasMany(medicine::class);
    }
    public function examinations(){
        return $this->hasMany(examination::class);
    }
}
