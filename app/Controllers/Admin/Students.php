<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Students extends BaseController
{
    public function index()
    {
        $data['page'] = view('backend/studentslist');
        return view('backend/template',$data);
    }
    
    public function add()
    {
        $data['page'] = view('backend/studentsform');
        return view('backend/template',$data);
    }
}
