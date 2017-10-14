<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Http\Services\SocialService;
use App\Social;

class SocialController extends \App\Http\Controllers\Controller
{
    private $userService;
    private $socialService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService, SocialService $socialService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
        $this->socialService = $socialService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = $this->userService->getSocialRecord();
      return view('admin.social.index',compact('data'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = $this->socialService->get($id);
      $social = $data[0];
      return view('admin.social.show',compact('social'));
    }

    /**
     * Edit welcome image path.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = $this->socialService->get($id);
      $social = $data[0];
      return view('admin.social.edit',compact('social'));
    }

    /**
     * Save the Social.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'linkedin_url'=> 'required',
        'contact_email' => 'required',
        'quora_url' => 'required',
        'rss_feed' => 'required'
          ]);

      $social = $this->socialService->get($id)->first();
      $social->fill($request->only('linkedin_url','contact_email','quora_url','rss_feed'));
      $social->save();
      return redirect()->route('social')->with('message','Record Saved !!!!');
    }
}
