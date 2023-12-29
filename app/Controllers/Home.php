<?php

namespace App\Controllers;

use App\Models\CommentModel;
use App\Models\PostModel;
use App\Models\UserModel;

class Home extends BaseController
{

public $userModel, $postModel, $komenModel;

public function __construct(){
    $this->userModel = new UserModel();
    $this->postModel = new PostModel();
    $this->komenModel = new CommentModel();

}
    public function index()
    {        $pengguna = $this->userModel->getUsers();
             $posting = $this->postModel->getPostingan();
            

             foreach ($posting as &$post) {
                $commentCount = $this->komenModel->countCommentsByPost($post['postid']);
                $post['comment_count'] = $commentCount;
            }

        $data = [
            'pengguna' => $pengguna,
            'postingan' => $posting,
            // 'ps'        => $postingan,
        ];
            // dd($data);
            return view('home', $data);
        
    }
}
