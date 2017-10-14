<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class PortfolioProjectController extends Controller
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
      $project = $port->project;
      return view('admin.project.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.project.create');
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
        'projectName'=>'required',
        'title'=>'required',
        'description'=>'required',
        'url'=>'required'
      ]);

      $user = \Auth::user();
      $port = $user->portfolio;
      $project = new Project($request->only('projectName','title','description','url'));
      $project->portfolio()->associate($port);
      $project->save();
      return redirect()->route('portProject')->with('message','Record Created !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $project = Project::findOrFail($id);
      return view('admin.project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $project = Project::findOrFail($id);
      return view('admin.project.edit',compact('project'));
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
        'projectName'=>'required',
        'title'=>'required',
        'description'=>'required',
        'url'=>'required'
      ]);

      $project = Project::findOrFail($id);
      $project->fill($request->only('projectName','title','description','url'));
      $project->save();
      return redirect()->route('portProject')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $project = Project::findOrFail($id);
      $project->delete();
      return redirect()->route('portProject')->with('message','Record Deleted !!!!');
    }
}
