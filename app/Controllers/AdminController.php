<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AdminController extends BaseController
{
    public function index()
    {
        $model = new AdminModel();
        $data['admin'] = $model->findAll();
        return view('admin/index', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $model = new AdminModel();
        $model->save([
            'user' => $this->request->getPost('user'),
            'password' => $this->request->getPost('password'),
        ]);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new AdminModel();
        $data['admin'] = $model->find($id);
        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $model = new AdminModel();
        $model->update($id, [
            'user' => $this->request->getPost('user'),
            'password' => $this->request->getPost('password'),
        ]);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new AdminModel();
        $model->delete($id);
        return redirect()->to('/admin');
    }
}
