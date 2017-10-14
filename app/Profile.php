<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $table = 'profile';
  protected $fillable = [
      'about_me_text','name','age','email','phone','image_path'
  ];

}
