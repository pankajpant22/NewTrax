<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

  protected $fillable = [
      'description', 'url','projectName','title'
  ];

  public function portfolio()
  {
    return $this->belongsTo('App\Portfolio');
  }
}
