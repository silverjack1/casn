<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {

        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('auth/login');
        } else {
            $user = $this->ionAuth->user()->row();
            // dd($user);
            $data['user'] = $user;
            return view('admin/index', $data);
        }
    }

    public function tambah()
    {
        $username = 'diannafi';
        $password = '12345678';
        $email = 'admin2@admin.com';
        $additional_data = array(
            'first_name' => 'Dian',
            'last_name' => 'Nafi',
        );

        $this->ionAuth->register($username, $password, $email, $additional_data);
    }
}