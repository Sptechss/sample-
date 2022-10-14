<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\Useradmin;

class Login extends BaseController
{
    public function index()
    {
        helper('alert_helper');
        if($this->request->getMethod() == 'post') {
            
            $post = $this->request->getPost();
            $adminlogin = new Useradmin();
            $users = $adminlogin
                ->where('username',$post['username'])
                ->where('password',MD5($post['password']))
                ->first();
                $session = session();
            if($users) {
                $session->set('user', $users['username']);
                $session->set('id', $users['id']);
                return redirect()->to('admin/dashboard');

            } else {
                return redirect()->to('admin/login')->with('message','password and username invalid');
            }
            
        }

        return view('backend/login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin/login');
    }
}
