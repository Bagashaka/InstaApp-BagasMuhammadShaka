<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{

public $userModel;

public function __construct(){
    $this->userModel = new UserModel();
}
    public function index(): string
    {        $pengguna = $this->userModel->getUsers();
        $data = [
            'pengguna' => $pengguna,
        ];
            // dd($data);
            return view('home', $data);
        
    }
}
