<?php

namespace App;

class Sanitize {

  public static sanitized($input) {
    dd($input);
    return trim(strip_tags($input))
  }
}
