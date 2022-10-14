<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Adminauth extends BaseController
{
    public function __construct()
    {
        if( !session()->get('user'))
        {
           header('location:/admin/login');
           exit();
        }
    }
    
}
