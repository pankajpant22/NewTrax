<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\Tag;

class BlogController extends Controller
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
      $blogs = $user->blogs;
      return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tags = Tag::all();
      return view('admin.blog.create',compact('tags'));
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
        'title'=> 'required',
        'description' => 'required'
        ]);
      $user=\Auth::user();
      $myCheckboxes = $request->get('my_checkbox');
      $blog= new Blog($request->only('title','description'));
      $blog->user_id = $user->id;
      $blog->save();
      $blog->tags()->attach($myCheckboxes);
      return redirect()->route('blog')->with('message','Record Created !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id)->toArray();
        return view('admin.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $blog = Blog::find($id);
      $tags = Tag::all();
      return view('admin.blog.edit',compact('blog','tags'));
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
        'title'=> 'required',
        'description' => 'required'
        ]);
        $myCheckboxes = $request->get('my_checkbox');
        $blog = Blog::find($id);
        $blog->fill($request->only('title','description'));
        $blog->tags()->sync($myCheckboxes);
        $blog->save();
        return redirect()->route('blog')->with('message','Record Saved !!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $blog = Blog::find($id);
      $blog->delete();
      return redirect()->route('blog')->with('message','Record Deleted !!!!');
    }
}
