<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\User;

class WelcomeController extends \App\Http\Controllers\Controller
{
    private $userService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = $this->userService->getRecord();
      return view('admin.welcome.index',compact('data'));
    }

    /**
     * Edit welcome image path.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = $this->userService->getUser($id);
      return view('admin.welcome.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
      ]);

      $user = User::findOrFail($id);
      // save image and image path
      if($request->file('image')){
        $getimageName = 'main_page_'.time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('img'), $getimageName);
        $imagePath = '/img/'.$getimageName;
        $user->main_image_path = $imagePath;
      }
      $user->save();
      return redirect()->route('admin')->with('message','Record Saved !!!!');
    }

}
