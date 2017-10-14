<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
  protected $fillable = [
    'company','from','to','designation','responsibility','company_url'
  ];

  public function portfolio()
  {
    return $this->belongsTo('App\Portfolio');
  }
}
