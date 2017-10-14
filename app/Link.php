<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{

  protected $fillable = [
      'url'
  ];

  public function material()
  {
    return $this->belongsTo('App\Material');
  }
}
