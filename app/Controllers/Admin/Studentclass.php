<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Studentclass extends BaseController
{
    public function index()
    {
        $data['page'] = view('backend/studentclasslist');
        return view('backend/template',$data);
    }

    public function add()
    {
        $data['page'] = view('backend/studentclassform');
        return view('backend/template',$data);
    }
}


