<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Http\Services\UserService;

class MaterialController extends Controller
{
  private $userService;

  public function __construct(UserService $userService) {
      $this->userService = $userService;
  }

  public function index()
  {
      $material = Material::all();
      $data = $this->userService->getRecord();
      return view('material.index')->with(compact('material','data'));
  }

}
