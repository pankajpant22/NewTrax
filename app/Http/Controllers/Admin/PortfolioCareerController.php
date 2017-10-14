<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Career;

class PortfolioCareerController extends Controller
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
      $career = $port->career;
      return view('admin.career.index',compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.career.create');
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
        'company'=>'required',
        'from'=>'required',
        'to'=>'required',
        'designation'=>'required',
        'responsibility'=>'required',
        'company_url'=>'required'
      ]);

      $user = \Auth::user();
      $port = $user->portfolio;
      $career = new Career($request->only('company','from','to','designation','responsibility','company_url'));
      $career->portfolio()->associate($port);
      $career->save();
      return redirect()->route('career')->with('message','Record Created !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
      return view('admin.career.show',compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        return view('admin.career.edit',compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
      $this->validate($request,[
        'company'=>'required',
        'from'=>'required',
        'to'=>'required',
        'designation'=>'required',
        'responsibility'=>'required',
        'company_url'=>'required'
      ]);

      $career->fill($request->only('company','from','to','designation','responsibility','company_url'));
      $career->save();
      return redirect()->route('career')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
      $career->delete();
      return redirect()->route('career')->with('message','Record Deleted !!!!');
    }
}
