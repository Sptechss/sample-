<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['page'] = view('backend/dashboard');
        return view('backend/template',$data);
    }
}


