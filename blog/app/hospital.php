<?php

namespace App;
use App\labdoctor;
use App\User;
use App\doctor;
use App\examination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class hospital extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'location',
        'phone_number',
        'avatar'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function doctors()
    {
        return $this->belongsToMany(doctor::class)->withTimestamps();
    }
    public function labdoctors(){
        return $this->hasMany(labdoctor::class);
    }
    public function examinations(){
        return $this->hasMany(examination::class);
    }
}
