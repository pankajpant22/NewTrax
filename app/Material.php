<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{

  public $with = ['links'];

  protected $fillable = [
      'title'
  ];

  public function links()
  {
     return $this->hasMany('App\Link');
  }
}
