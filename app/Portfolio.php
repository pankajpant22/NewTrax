<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
  public $with = ['profile','project','skill','tool','volunteering','education','language'];

  public function profile()
  {
     return $this->hasOne('App\Profile');
  }

  public function project()
  {
     return $this->hasMany('App\Project');
  }

  public function skill()
  {
     return $this->hasMany('App\Skill');
  }

  public function tool()
  {
     return $this->hasMany('App\Tool');
  }

  public function volunteering()
  {
     return $this->hasMany('App\Volunteering');
  }

  public function education()
  {
     return $this->hasMany('App\Education');
  }

  public function language()
  {
     return $this->hasMany('App\Language');
  }

  public function career()
  {
     return $this->hasMany('App\Career');
  }
}
