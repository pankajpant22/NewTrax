<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteering extends Model
{
  protected $fillable = [
      'volunteerName','title','description','url'
  ];

  public function portfolio()
  {
    return $this->belongsTo('App\Portfolio');
  }
}
