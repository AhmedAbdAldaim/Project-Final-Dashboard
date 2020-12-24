<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\worktime;
class doctorhospital extends Model
{
    protected $table = 'doctor_hospital';

    public function worktime(){
        return $this->hasOne(worktime::class);

    }
    public function doctor(){
        return $this->belongsTo(doctor::class);
    }
}
