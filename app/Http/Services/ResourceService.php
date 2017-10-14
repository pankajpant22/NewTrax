<?php
namespace App\Http\Services;
use App\Resource;

class ResourceService {

    public function getAll()
    {
        $data = Resource::all();
        return !is_null($data)?$data->toArray():null;
    }

    
}
