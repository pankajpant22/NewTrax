<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{

  protected $fillable = [
      'tool', 'stars'
  ];
  public function portfolio()
  {
    return $this->belongsTo('App\Portfolio');
  }
}
