<?php

namespace App\Models;

use CodeIgniter\Model;
use DateTime;

class CommentModel extends Model 
{

    

    public function getCommentsByPostId($postId)
    {
        return $this->select('comment.id as cid, comment.user_id, comment.post_id, comment.comment, users.id, users.username')
        ->join('users', 'users.id = comment.user_id')
        ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
        ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
        ->where('post_id', $postId)->findAll();
    }

    public function countCommentsByPost($postId)
{
    return $this->where('post_id', $postId)->countAllResults();
}
 
    protected $table            = 'comment';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'user_id', 'post_id', 'comment', 'created_at', 'updated_at' , 'deleted_at'];

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
