<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{

    private $gear3, $gear5;
    public function __construct()
    {
        $this -> gear3 = new \App\Models\StudentModel();
        $this -> gear5 = new \App\Models\StudSectionModel();
    }

    public function index()
    {

    }

    public function gear1($gear1)
    {
        echo $gear1;
    }

    public function gear2()
    {
        $data['gear3'] = $this -> gear3 -> findAll();
        $data ['gear5'] = $this -> gear5 -> findAll();

        return view('main', $data);
    }

    public function save()
    {
        $id = $_POST['id'];
        $data = [   
            'StudName' => $this->request->getVar('StudentName'),
            'StudGender' => $this->request->getVar('Gender'),
            'StudCourse' => $this->request->getVar('Course'),
            'StudSection' => $this->request->getVar('Section'),
            'StudYear' => $this->request->getVar('Year'),
        ];

        if($id != null)
        {
            $this -> gear3 -> set($data) -> where('id', $id) -> update();
        }
        else
        {
            $this -> gear3 -> save($data);
        }
        
        return redirect()->to('/gear2');
    }
    
    public function delete($id)
    {
        $this -> gear3 -> delete($id);
        return redirect() -> to ('/gear2');
    }

    public function edit($id)
    {
        $data = [
        'gear3' => $this -> gear3 -> findAll(),
        'gear5' => $this-> gear5 -> findAll(),
        'gear4' => $this -> gear3 -> where('id', $id) -> first(),
    ];
        return view('main', $data);
    }
}
