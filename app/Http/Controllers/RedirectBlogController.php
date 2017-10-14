<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService;

class RedirectBlogController extends Controller
{

  private $userService;

  public function __construct(UserService $userService) {
      $this->userService = $userService;
  }

  public function index()
  {
      $url = "https://vinaysrdblog.wordpress.com/";
      $data = $this->userService->getRecord();
      return view('wordpressblog.index')->with(compact('url','data'));
  }
  
}
