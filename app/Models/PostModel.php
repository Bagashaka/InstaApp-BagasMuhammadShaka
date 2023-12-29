<?php

namespace App\Models;
 
use CodeIgniter\Model;

class PostModel extends Model
{

    public function getPostingan($id = null){
        if($id != null){
            return $this->select('users.*, post.user_id, post.caption, post.image_url, post.created_at')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('post', 'post.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->find($id);
        }
        return $this->select('users.*, post.user_id, post.caption, post.image_url, post.created_at')
        ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
        ->join('post', 'post.user_id = users.id')
        ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
        ->findAll();
    }

    protected $table            = 'post';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'user_id', 'caption', 'image_url', 'created_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
