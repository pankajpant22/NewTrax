<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Link;
use App\Material;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
        return view('admin.links.index',compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $resources = Material::all();
      return view('admin.links.create',compact('resources'));
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
        'url'=>'required'
      ]);

      $material = Material::findOrFail($request->get("resource"));
      $link = new Link($request->only('url'));
      $link->material()->associate($material);
      $link->save();
      return redirect()->route('link')->with('message','Record Created !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $link = Link::findOrFail($id);
        return view('admin.links.show',compact('link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $resources = Material::all();
      $link = Link::with('material')->findOrFail($id);
      return view('admin.links.edit',compact('link','resources'));
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
        'url'=>'required'
      ]);

      $material = Material::findOrFail($request->get("resource"));
      $link = Link::findOrFail($id);
      $link->fill($request->only('url'));
      $link->material()->associate($material);
      $link->save();
      return redirect()->route('link')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $link= Link::findOrFail($id);
      $link->delete();
      return redirect()->route('link')->with('message','Record Deleted !!!!');
    }
}
