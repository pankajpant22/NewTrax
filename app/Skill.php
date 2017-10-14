<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

  protected $fillable = [
      'skill', 'stars'
  ];

  public function portfolio()
  {
    return $this->belongsTo('App\Portfolio');
  }
}
