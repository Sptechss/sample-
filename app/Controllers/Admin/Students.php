<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Student;
use App\Models\Studentcls;

class Students extends Adminauth
{
    public function index()
    {
        helper('alert_helper');
        $students = new  Student();
        $page['students'] = $students
            ->select('students.*,cls.class as class_id')
            ->join('studentclass as cls', 'cls.id = students.class_id', 'left')
            ->findAll();
        $data['page'] = view('backend/studentslist', $page);
        return view('backend/template', $data);
    }

    public function add($id = null)
    {
        $students = new  Student();
        $page = [];
        if ($this->request->getMethod() == 'post') {


            $post = $this->request->getPost();
            if ($id) {
                $students->update($id, $post);
            } else {
                $students->insert($post);
            }
            return redirect()->to('/admin/students');
        }
        if ($id) {
            $page['id'] = $id;
            $page['old_data'] = $students->find($id);
        }
        $stdclass = new Studentcls();
        $page['class'] = $stdclass->findAll();
        $data['page'] = view('backend/studentsform', $page);
        return view('backend/template', $data);
    }

    public function delete($id)
    {
        $students = new Student();
        $students->delete($id);
        return redirect()->to('/admin/students');
    }
}
