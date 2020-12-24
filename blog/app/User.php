<?php

namespace App;
use App\hospital;
use App\doctor;
use App\pichant;
use App\labdoctor;
use Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function hospitals(){
        return $this->belongsToMany(hospital::class);
    }
    public function doctor(){
        return $this->hasOne(doctor::class);

    }
    public function isDoctor(){
        return $this->role == 'doctor';
    }
    public function pichant(){
        return $this->hasOne(pichant::class);

    }
    public function labdoctor(){
        return $this->hasOne(labdoctor::class);
    }
    public function isSuperadmin(){
        return $this->role == 'superadmin';
    }
    public function ishosptaladmin(){
        return $this->role == 'hosptaladmin';
    }
}
