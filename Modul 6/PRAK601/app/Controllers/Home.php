<?php

namespace App\Controllers;

use App\Models\MyModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new MyModel();
        $data['praktikan'] = $model->getData();

        echo view('layout/header', ['title' => 'Beranda']);
        echo view('home', $data);
    }

    public function profile()
    {
        $model = new MyModel();
        $data['praktikan'] = $model->getData();

        echo view('layout/header', ['title' => 'Profil']);
        echo view('profile', $data);
    }
}