<?php

namespace App\Controllers;

use App\Models\ModelUser;

class User extends BaseController
{
    public function index()
    {
        $model = new ModelUser();
        $data['user'] = $model->getUser()->getResultArray();
        echo view('user/vuser', $data);
    }

    public function save()
    {
        $model = new ModelUser();
        $data = array(
            'id'   => $this->request->getPost('id'),
            'username' => $this->request->getPost('username'),
            'password'=>password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
            'email'     => $this->request->getPost('email'),
            'level'     => $this->request->getPost('level'),
        );
        if (!$this->validate([
            'id' => [
                'rules' => 'required|is_unique[user.id]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => '{field} Sudah ada'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }
        $model->insertData($data);
        return redirect()->to('/user');
    }

    function update()
    {
        $model = new ModelUser();
        $id = $this->request->getPost('id');
        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email' => $this->request->getPost('email'),
            'level' => $this->request->getPost('level')
    );
    $model->updateuser ($data, $id);
    return redirect()->to('/user/index');
    }

    public function delete()
    {
        $model = new ModelUser();
        $id = $this->request->getPost('id');
        $model->deleteuser($id);
        return redirect()->to('/user/index');
    }
}