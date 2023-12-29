<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\UserModel;

class Home extends BaseController
{

public $userModel, $postModel;

public function __construct(){
    $this->userModel = new UserModel();
    $this->postModel = new PostModel();

}
    public function index(): string
    {        $pengguna = $this->userModel->getUsers();
             $posting = $this->postModel->getPostingan();
        $data = [
            'pengguna' => $pengguna,
            'postingan' => $posting,
        ];
            // dd($data);
            return view('home', $data);
        
    }
}
