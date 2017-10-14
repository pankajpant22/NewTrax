<?php
namespace App\Http\Services;
use App\Blog;

class BlogService {

    public function get()
    {
        $data = Blog::all();
        return !is_null($data)?$data->toArray():null;
    }
}