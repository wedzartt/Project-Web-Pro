<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminModel = new AdminModel();

        $admin = $adminModel
                    ->where('username', $username)
                    ->first();

        if(!$admin)
        {
            return redirect()
                ->back()
                ->with('error', 'Username tidak ditemukan');
        }

        if(!password_verify($password, $admin['password']))
        {
            return redirect()
                ->back()
                ->with('error', 'Password salah');
        }

        session()->set([
            'admin_id' => $admin['id'],
            'username' => $admin['username'],
            'isLoggedIn' => true
        ]);

        return redirect()->to('/admin/dashboard');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/admin/login');
    }
}