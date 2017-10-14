<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;

class PortfolioLangController extends Controller
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
      $lang = $port->language;
      return view('admin.lang.index',compact('lang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.lang.create');
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
        'lang'=>'required',
        'stars'=>'required'
      ]);

      $user = \Auth::user();
      $port = $user->portfolio;
      $lang = new Language($request->only('lang','stars'));
      $lang->portfolio()->associate($port);
      $lang->save();
      return redirect()->route('lang')->with('message','Record Created !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $lang = Language::findOrFail($id)->get()->first();
      return view('admin.lang.show',compact('lang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $lang = Language::findOrFail($id)->get()->first();
      return view('admin.lang.edit',compact('lang'));
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
        'lang'=>'required',
        'stars'=>'required'
      ]);

      $lang = Language::findOrFail($id)->get()->first();
      $lang->fill($request->only('lang','stars'));
      $lang->save();
      return redirect()->route('lang')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $lang = Language::findOrFail($id);
      $lang->delete();
      return redirect()->route('lang')->with('message','Record Deleted !!!!');
    }
}
