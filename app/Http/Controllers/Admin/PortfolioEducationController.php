<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Education;

class PortfolioEducationController extends Controller
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
      $education = $port->education;
      return view('admin.education.index',compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request,[
        'university'=>'required',
        'from'=>'required',
        'to'=>'required',
        'course_title'=>'required',
        'course_desc'=>'required',
        'university_url'=>'required'
      ]);

      $user = \Auth::user();
      $port = $user->portfolio;
      $education = new Education($request->only('university','from','to','course_desc','course_title','university_url'));
      $education->portfolio()->associate($port);
      $education->save();
      return redirect()->route('education')->with('message','Record Created !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
      return view('admin.education.show',compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('admin.education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
      $this->validate($request,[
        'university'=>'required',
        'from'=>'required',
        'to'=>'required',
        'course_title'=>'required',
        'course_desc'=>'required',
        'university_url'=>'required'
      ]);

      $education->fill($request->only('university','from','to','course_desc','course_title','university_url'));
      $education->save();
      return redirect()->route('education')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
      $education->delete();
      return redirect()->route('education')->with('message','Record Deleted !!!!');
    }
}
