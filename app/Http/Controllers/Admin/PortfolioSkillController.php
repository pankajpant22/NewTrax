<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skill;

class PortfolioSkillController extends Controller
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
      $skill = $port->skill;
      return view('admin.skill.index',compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skill.create');
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
        'skill'=>'required',
        'stars'=>'required'
      ]);

      $user = \Auth::user();
      $port = $user->portfolio;
      $skill = new Skill($request->only('skill','stars'));
      $skill->portfolio()->associate($port);
      $skill->save();
      return redirect()->route('portSkill')->with('message','Record Created !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        return view('admin.skill.show',compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
      return view('admin.skill.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
      $this->validate($request,[
        'skill'=>'required',
        'stars'=>'required'
      ]);

      $skill->fill($request->only('skill','stars'));
      $skill->save();
      return redirect()->route('portSkill')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('portSkill')->with('message','Record Deleted !!!!');
    }
}
