<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Studentcls;
use App\Models\Subject;

class Subjects extends  Adminauth 
{
    public function index()
    {
        helper('alert_helper');
        $subjects = new Subject();
        $page['subjects'] = $subjects
        ->select('subjected.*,s.class as class_id')
        ->join('studentclass as s','s.id = subjected.class_id','left')
        ->findAll();
        $data['page'] = view('backend/subjectslist',$page);
        return view('backend/template',$data);
    }

    public function add($id=null)
    {
        $subjects = new Subject();
        $page = [];
        if($this->request->getMethod() == 'post')
        {
            $data = $this->request->getPost();
            if($id)
            { $subjects->update($id,$data);
            }
            else{
                $subjects->insert($data);
            }
            return redirect()->to('admin/Subjects');
        }
        if($id){
            $page['id'] = $id;
            $page['old_data'] = $subjects->find($id);
        }
        $stdclass = new Studentcls();
        $page['studentclass'] = $stdclass->findAll();
        $data['page'] = view('backend/subjectsform',$page);
        return view('backend/template',$data);
    }

    public function delete($id)
    {
       $subjects = new Subject();
       $subjects->delete($id);
       return redirect()->to('admin/Subjects');

    }
}
