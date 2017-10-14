<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function socials()
    {
       return $this->hasOne('App\Social');
    }

    public function portfolio()
    {
       return $this->hasOne('App\Portfolio');
    }

    public function blogs()
    {
      return $this->hasMany('App\Blog');
    }

    public function scopeWithAll($query)
    {
        $query->with('socials','portfolio','blogs');
    }


}
