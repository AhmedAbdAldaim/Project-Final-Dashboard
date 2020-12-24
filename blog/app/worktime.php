<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class worktime extends Model
{
    public function doctor(){
        return $this->belongsTo(doctor::class);
    }
}
