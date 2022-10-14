<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Notice extends BaseController
{
    public function index()
    {
        $data['page'] = view('backend/noticelist');
        return view('backend/template',$data);
    }


    public function add()
    {
        $data['page'] = view('backend/noticesform');
        return view('backend/template',$data);
    }
}
