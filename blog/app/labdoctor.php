<?php

namespace App;
use App\hospital;
use App\User;
use Illuminate\Database\Eloquent\Model;

class labdoctor extends Model
{
    public function hospital(){
        return $this->belongsTo(hospital::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
