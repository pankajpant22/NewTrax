<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $material = Material::all();
      return view('admin.material.index',compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.material.create');
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
        'title'=>'required'
      ]);

      $material = new Material($request->only('title'));
      $material->save();
      return redirect()->route('material')->with('message','Record Created !!!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $material = Material::findOrFail($id);
      return view('admin.material.show',compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $material = Material::findOrFail($id);
      return view('admin.material.edit',compact('material'));
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
        'title'=>'required'
      ]);

      $material = Material::findOrFail($id);
      $material ->fill($request->only('title'));
      $material->save();
      return redirect()->route('material')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $material = Material::findOrFail($id);
      $material->delete();
      return redirect()->route('material')->with('message','Record Deleted !!!!');
    }
}
