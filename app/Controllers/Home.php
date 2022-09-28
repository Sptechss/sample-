<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder  = $db->table('records');
        $data['page'] = view('frontend/home');
        return view('frontend/template', $data);
    }

    public function about()
    {
        $data['page'] = view('frontend/about');
        return view('frontend/template', $data);
    }

    public function load()
    {
        $data['page'] = view('frontend/load');
        return view('frontend/template', $data);
    }
}
