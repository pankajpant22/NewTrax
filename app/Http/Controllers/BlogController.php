<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Services\UserService;

class BlogController extends Controller
{
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->userService->getRecord();
        $result = \Session::get('result');
        return view('blogs.index')->with(compact('data','result'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function search(Request $request)
    {
      if ($request->get('profile_name_student') == "true") {
        $search_tags = $request->only('reason','marital','city','university');
      }else {
        $search_tags = $request->only('reason','marital','city');
      }

      $tagsList = [];
      foreach ($search_tags as $row){
        $temp = explode('_',$row);
        array_push($tagsList,$temp[1]);
      }

      // search Tags
      $data = \App\Tag::with('blogs')->whereIn('name', $tagsList)->get();
      $result = [];
      $blogs = $data->pluck('blogs');
      foreach($blogs as $b) {
        $temp = [];
        $bb = $b->first();
        foreach ($b as $key => $value) {
          $description = $value->description;
          // $description = $this->formatUrlsInText($description);
          $temp['title'] = $value->title;
          $temp['desc'] = $description;
          $result[$value->id] = $temp;
        }
      }
      return redirect('blog')->with('result', $result);
    }

    public function formatUrlsInText($text){
            $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
            preg_match_all($reg_exUrl, $text, $matches);
            $usedPatterns = array();
            foreach($matches[0] as $pattern){
                if(!array_key_exists($pattern, $usedPatterns)){
                    $usedPatterns[$pattern]=true;
                    $text = str_replace  ($pattern, "<a href='{$pattern}' rel='nofollow'>{$pattern}</a> ", $text);
                }
            }
            return $text;
          }


}
