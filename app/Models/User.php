<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik','name', 'email','role','password',
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

    public function berita()
    {
        return $this->hasMany('App\Models\berita');
    }

    public function video()
    {
        return $this->hasMany('App\Models\video');
    }

    public function proposalibadah()
    {
        return $this->hasMany('App\Models\proposalibadah');
    }

    public function proposallembaga()
    {
        return $this->hasMany('App\Models\proposallembaga');
    }
    public function catatan()
    {
        return $this->hasMany('App\Models\catatan');
    }
}
