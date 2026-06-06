<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin()
    {
        $userModel = new UserModel();
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if (empty($username) || empty($password)) {
            $session->setFlashdata('error', 'Login terlebih dahulu!');
            return redirect()->to('/login');
        }

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'username' => $user['username'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/books');
        }

        $session->setFlashdata('error', 'Username atau password salah.');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}