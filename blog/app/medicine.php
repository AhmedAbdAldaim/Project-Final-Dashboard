<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    public function interview(){
        return $this->belongsTo(interview::class);
    }
}
