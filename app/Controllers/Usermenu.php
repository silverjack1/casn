<?php

namespace App\Controllers;

use App\Libraries\Admin;
use App\Models\CustomModel;
use App\Models\SoalModel;

class Usermenu extends BaseController
{

    protected $MenuModel;
    public function __construct()
    {
        $this->custommodel = new CustomModel();
        $this->soalmodel = new SoalModel();
    }
    public function index()
    {

        $slug = new Admin(); // create an instance of Library

        $string = "Online Web Tutor Blog";

        echo $slug->slugify($string); // calling method

    }

    public function slug()
    {
        echo getSite()->id;
    }

    public function helper()
    {
        return view('admin/helper');
    }

    public function form()
    {
        return view('admin/form');
    }
    public function tambah()
    {
        $username = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $nama = $this->request->getPost('nama');

        echo $username . PHP_EOL;
        echo $password . PHP_EOL;
        echo $nama . PHP_EOL;
    }

    public function model()
    {
        $data = $this->custommodel->getInfo();
        $soal = json_decode($data);
        // dd($soal->soal);

        echo '<ul>';
        foreach ($soal->soal as $s) {
            echo $s;
        }
        echo '</ul>';
    }

    public function jawaban()
    {
        $tes = $this->soalmodel->getJawaban()->getrow();
        $jawaban = $tes->jawaban;
        $kunci = $tes->kunci;
        echo $jawaban;
        echo '<br>';
        $jawaban = str_replace('6=a', '6=c', $jawaban);
        echo $jawaban;
        $pilih = explode(',', $jawaban);
        $kuncijawaban = explode(',', $kunci);
        $result = count(array_intersect($pilih, $kuncijawaban));
        echo '<br>';
        print_r($result);
    }
}