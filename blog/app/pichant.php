<?php

namespace App;
use App\User;
use App\interview;
use Illuminate\Database\Eloquent\Model;

class pichant extends Model
{
    protected $fillable = [
        'address',
        'birthday',
        'image',
        'gender',
        'the_id_number',
        'blood_type',
        'user_id'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function interviews(){
        return $this->hasMany(interview::class,'id','pichant_id');
    }
}
