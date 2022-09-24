<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($id=null)
    {   
        $db      = \Config\Database::connect();
        $builder  = $db->table('records');
        $data = [
            'name'=>'sahil khan',
            'email'=>'sahilshaikh@70034gmail.com',
            'address'=>'beed by pass road',
            'phone'=>'8788946164'
        ];
         $builder->update($id,$data);
        $data['page'] = view('frontend/home');
        return view('frontend/template',$data);
    }

    public function about()
    {
        $data['page'] = view('frontend/about');
        return view('frontend/template',$data);
    }

    public function load()
    {
        $data['page'] = view('frontend/load');
        return view('frontend/template',$data);
    }
}


