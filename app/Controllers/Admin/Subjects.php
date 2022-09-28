<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Subject;

class Subjects extends BaseController
{
    public function index()
    {
        $subjects = new Subject();
        $page['subjects'] = $subjects->findAll();
        $data['page'] = view('backend/subjectslist',$page);
        return view('backend/template',$data);
    }

    public function add($id=null)
    {
        $subjects = new Subject();
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
