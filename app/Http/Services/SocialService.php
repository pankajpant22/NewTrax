<?php
namespace App\Http\Services;
use App\Social;

class SocialService {

    public function get($id)
    {
        $data = Social::where('active',1)->find($id)->get();
        return $data;
    }

}
