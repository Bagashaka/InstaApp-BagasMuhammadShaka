<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommentModel;
use App\Models\PostModel;
use App\Models\UserModel;

class PostController extends BaseController
{
    public $userModel;
    public $postModel;
    public $komenModel;
    public function __construct(){
        $this->userModel = new UserModel();
        $this->postModel = new PostModel();
        $this->komenModel = new CommentModel();
    }

    public function index(){
       
        $posting = $this->postModel->getMyPost();

        foreach ($posting as &$post) {
            $commentCount = $this->komenModel->countCommentsByPost($post['postid']);
            $post['comment_count'] = $commentCount;
        }
        
        $data = [
            // 'pengguna' => $pengguna,
            'postingan' => $posting,

        ];
            // dd($data);
            return view('myPost', $data);
    }

    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('create_post', $data);
    }

    public function store(){
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'caption' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ],
                'image_url' => [
                    'rules' => 'uploaded[image_url]|mime_in[image_url,image/jpeg,image/png,image/gif]',
                    'errors' => [
                        'uploaded' => 'Pilih foto terlebih dahulu.',
                        'mime_in' => 'Format foto harus berupa JPEG, PNG, atau GIF.'
                    ]
            ],
        ])) {
            
            return redirect()->to(base_url('/pos/create'))->withInput()->with('validation', $validation->getErrors());
        }
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('image_url');
        $name = $foto->getRandomName();

        if ($foto->move($path, $name)) {
            $foto = base_url($path . $name);
        }

         $this->postModel->save([
            'user_id' => $this->request->getVar('user_id'),
            'caption' => $this->request->getVar('caption'),
            'image_url' => $foto
        ]);
        // dd($data);
        return redirect()->to(base_url('/'));
    }

    public function edit($id){
        $posting = $this->postModel->getMyPost($id);
        // dd($posting);
        $data = [
            'postingan' => $posting,
        ];
            // dd($data);
            return view('edit_postingan', $data);
    }
    public function update($id){
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'caption' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi.'
                ]
            ]
            ])) {
            
                return redirect()->to(base_url('/pos/create'))->withInput()->with('validation', $validation->getErrors());
            }
           $data =[
                'user_id' => $this->request->getVar('user_id'),
                'caption' => $this->request->getVar('caption'),
            ];

            $result = $this->postModel->updateMyPost($data, $id);
            if (!$result) {
                return redirect()->back()->withInput()
                    ->with('error', 'Gagal mengubah data');
            }
            return redirect()->to(base_url('/pos'));
    }

    public function destroy($id){
        $result = $this->postModel ->deleteMyPost($id);
         if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
         }
         return redirect()->to(base_url('/pos'))
                ->with('succcess', 'Berhasil menghapus data');
    }
}


