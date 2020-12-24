<?php

namespace App;
use App\User;
use App\speshalty;
use App\hospital;
use App\interview;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable = [
        'address','user_id','phone_number','carear','speshalty_id' ,'image','jop_number',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function speshalty(){
        return $this->belongsTo(speshalty::class);
    }
    public function hospitals(){
        return $this->belongsToMany(hospital::class)->withTimestamps();
    }
    public function interviews(){
        return $this->hasMany(interview::class);
    }
}
