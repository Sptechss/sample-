<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Studentcls;

class Studentclass extends BaseController
{
    public function index()
    {
        $stdclass = new Studentcls();
        $page['stdclass'] = $stdclass->findAll();
        $data['page'] = view('backend/class',$page);
        return view('backend/template',$data);
    }

    public function add($id=null)
    {
        $page = [];
        $stdclass = new Studentcls();
        if($this->request->getMethod() == 'post')
        {
          $data = $this->request->getPost();
          if($id)
          {
            $stdclass->update($id,$data);
           
          }
          else{
            $stdclass->insert($data);
          }
          return redirect()->to('admin/studentclass');
        }
        if($id){
            $page['id'] = $id;
            $page['old_data'] = $stdclass->find($id);
        }

        $data['page'] = view('backend/classform',$page);
        return view('backend/template',$data);
    }

    public function delete($id)
    {
       $stdclass = new Studentcls();
       $stdclass->delete($id);
       return redirect()->to('admin/studentclass');

    }
}


