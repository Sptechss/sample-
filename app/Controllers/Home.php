<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder  = $db->table('records');
        $data = [
            [
                'id'=>'2',
                'name' => 'fatima shaikh',
                'email' => 'fatima@gmail.com',
                'address' => 'pass road',
                'phone' => '87845456164',
            ], [
                'id'=>'3',
                'name' => 'sankit patil',
                'email' => 'sankit@gmail.com',
                'address' => 'jalna by pass road',
                'phone' => '7788946162',
            ]
        ];
        $builder->insert($data);
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
