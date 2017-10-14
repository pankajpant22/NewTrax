<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class PortfolioProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $port = $user->portfolio;
        $profile = $port->profile;
        return view('admin.profile.index',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
      return view('admin.profile.show',compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
      return view('admin.profile.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
      $this->validate($request,[
        'about_me_text'=> 'required',
        'name' => 'required',
        'age'=> 'required',
        'email'=> 'required',
        'phone'=> 'required',
        'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
      ]);

      $data = $request->only('about_me_text','name','age','email','phone');
      $profile->fill($data);
      // save image and image path
      if($request->file('image')){
        $getimageName = 'profile_'.time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('img'), $getimageName);
        $imagePath = '/img/'.$getimageName;
        $profile->image_path = $imagePath;
      }
      $profile->save();
      return redirect()->route('profile')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
