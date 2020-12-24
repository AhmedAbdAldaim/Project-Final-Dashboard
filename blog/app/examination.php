<?php

namespace App;
use App\interview;
use App\hospital;
use Illuminate\Database\Eloquent\Model;

class examination extends Model
{
    public function interview(){
        return $this->belongsTo(interview::class);
    }
    public function hospital(){
        return $this->belongsTo(hospital::class);
    }
}
