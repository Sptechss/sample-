<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Student;
use App\Models\Studentcls;
use App\Models\Subject;

class Dashboard extends Adminauth 
{
    public function index()
    {
        $page = [];
        $stdclass = new Studentcls();
        $subjects = new Subject();
        $students = new Student();
        $page['studentclass'] = $stdclass->countAllResults();
        $page['subjects'] = $subjects->countAllResults();
        $page['students'] = $students->countAllResults();
        $data['page'] = view('backend/dashboard',$page);
        return view('backend/template',$data);
    }
}


