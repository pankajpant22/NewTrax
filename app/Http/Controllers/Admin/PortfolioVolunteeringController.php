<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Volunteering;

class PortfolioVolunteeringController extends Controller
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
      $volunteering = $port->volunteering;
      return view('admin.volunteering.index',compact('volunteering'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.volunteering.create');
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
        'volunteerName'=> 'required',
        'title'=> 'required',
        'description'=>'required',
        'url'=>'required'
      ]);

      $user = \Auth::user();
      $port = $user->portfolio;
      $volunteering = new Volunteering($request->only('volunteerName','title','description','url'));
      $volunteering->portfolio()->associate($port);
      $volunteering->save();
      return redirect()->route('portVolunteering')->with('message','Record Created !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $volunteering = Volunteering::findOrFail($id);
      return view('admin.volunteering.show',compact('volunteering'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $volunteering = Volunteering::findOrFail($id);
      return view('admin.volunteering.edit',compact('volunteering'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'volunteerName'=> 'required',
        'title'=> 'required',
        'description'=>'required',
        'url'=>'required'
      ]);

      $volunteering = Volunteering::findOrFail($id);
      $volunteering->fill($request->only('volunteerName','title','description','url'));
      $volunteering->save();
      return redirect()->route('portVolunteering')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $volunteering = Volunteering::findOrFail($id);
      $volunteering->delete();
      return redirect()->route('portVolunteering')->with('message','Record Deleted !!!!');
    }
}
