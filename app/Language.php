<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

  protected $fillable = [
      'lang', 'stars'
  ];


  public function portfolio()
  {
    return $this->belongsTo('App\Portfolio');
  }
}
