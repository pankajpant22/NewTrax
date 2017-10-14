<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tool;

class PortfolioToolController extends Controller
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
      $tool = $port->tool;
      return view('admin.tool.index',compact('tool'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tool.create');
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
        'tool'=>'required',
        'stars'=>'required'
      ]);

      $user = \Auth::user();
      $port = $user->portfolio;
      $tool = new Tool($request->only('tool','stars'));
      $tool->portfolio()->associate($port);
      $tool->save();
      return redirect()->route('portTool')->with('message','Record Created !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tool $tool)
    {
        return view('admin.tool.show',compact('tool'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tool $tool)
    {
        return view('admin.tool.edit',compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tool $tool)
    {
      $this->validate($request,[
        'tool'=>'required',
        'stars'=>'required'
      ]);

      $tool->fill($request->only('tool','stars'));
      $tool->save();
      return redirect()->route('portTool')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tool $tool)
    {
        $tool->delete();
        return redirect()->route('portTool')->with('message','Record Deleted !!!!');
    }
}
