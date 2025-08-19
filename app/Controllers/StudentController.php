<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $model = new StudentModel();
        $data['student'] = $model->findAll();
        return view('student/index', $data);
    }

    public function create()
    {
        return view('student/create');
    }

    public function store()
    {
        $model = new StudentModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age'),
        ]);
        return redirect()->to('/student');
    }

    public function edit($id)
    {
        $model = new StudentModel();
        $data['student'] = $model->find($id);
        return view('student/edit', $data);
    }

    public function update($id)
    {
        $model = new StudentModel();
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age'),
        ]);
        return redirect()->to('/student');
    }

    public function delete($id)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('/student');
    }
}
