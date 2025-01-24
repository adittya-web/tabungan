<?php
namespace App\Controllers;
use App\Models\ModelUser;
class Login extends BaseController
{
    public function index()
    {
        echo view('/registrasi/viewlogin');
    }
    public function ceklogin()
    {
        $session = session();
        $model = new ModelUser();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $model->ceklogin($username);
        if ($cek) {
            $pass = $cek['password'];
            $verify_pass = password_verify($password, $pass);
            if ($pass == $verify_pass) {
                session()->set('username', $cek['username']);
                session()->set('masuk', TRUE);
                session()->set('level', $cek['level']);
                return redirect()->to('/layout');
            } else {
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/viewlogin');
            }
        } else {
            $session->setFlashdata('msg', 'Username Tidak Ditemukan');
            return redirect()->to('/viewlogin');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}