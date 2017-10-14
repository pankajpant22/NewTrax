<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  protected $fillable = [
      'university','from','to','course_desc','course_title','university_url'
  ];


  public function portfolio()
  {
    return $this->belongsTo('App\Portfolio');
  }
}
