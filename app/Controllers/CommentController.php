<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommentModel;
use App\Models\PostModel;
use App\Models\UserModel;

class CommentController extends BaseController
{
    public $komenModel, $userModel, $postModel;

    public function __construct(){
        $this->postModel = new PostModel();
        $this->komenModel = new CommentModel();
        $this->userModel = new UserModel();
    }
    public function index($id)
    {
        $posting = $this->postModel->getPostingan($id);
        $komen = $this->komenModel->getCommentsByPostId($id);
        $data = [
            'postingan' => $posting,
            'komen'     => $komen,
        ];
        // dd($data);

        return view('view_comment', $data);
    }

    public function create($id)
    {
        $posting = $this->postModel->getPostingan($id);
        $data = [
            'pos'  => $posting,
            'validation' => \Config\Services::validation()
        ];
        return view('create_comment', $data);
    }

    public function store (){
            $validation = \Config\Services::validation();
            if (!$this->validate([
                'comment' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus di isi.'
                    ]
                ]
            ])) {

            return redirect()->to(base_url('/comment/create'))->withInput()->with('validation', $validation->getErrors());
        }
        $this->komenModel->save([
            'user_id' => $this->request->getVar('user_id'),
            'post_id' => $this->request->getVar('post_id'),
            'comment' => $this->request->getVar('comment')
        ]);

        return redirect()->to(base_url('/'));
    }


    
}
