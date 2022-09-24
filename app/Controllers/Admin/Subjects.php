<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Subjects extends BaseController
{
    public function index()
    {
        $data['page'] = view('backend/subjectslist');
        return view('backend/template',$data);
    }

    public function add()
    {
        $data['page'] = view('backend/subjectsform');
        return view('backend/template',$data);
    }

    public function add_subjects()
    {
        $data['page'] = view('backend/addsubjectsfrom');
        return view('backend/template',$data);
    }
}
