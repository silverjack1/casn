<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\libraries\Admin;

class Bread extends Controller
{

    public $breadcrumb;

    public function __construct()
    {
        $this->breadcrumb = new Admin();
    }

    public function index()
    {

        $this->breadcrumb->add('Home', '/');
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('Customer', '/dashboard/customer');

        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('bread', $data);
    }
}