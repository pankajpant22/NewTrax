<?php
namespace App\Http\Services;
use App\User;

class UserService {

    public function getRecord()
    {
        $data = User::where('active',1)->withAll()->get()->first();
        return $data;
    }

    public function getUser($id)
    {
        $data = User::where('active',1)->find($id)->get();
        return $data;
    }

    public function getSocialRecord()
    {
      $data = $this->getRecord();
      return $data->socials;
    }
}
