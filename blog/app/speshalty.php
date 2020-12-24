<?php

namespace App;
use App\doctor;

use Illuminate\Database\Eloquent\Model;

class speshalty extends Model
{
    protected $fillable = [   'name',

];
public function doctors(){
    return $this->hasMany(doctor::class);
}
}
