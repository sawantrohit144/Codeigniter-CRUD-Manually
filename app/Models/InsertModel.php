<?php

namespace App\Models;
use CodeIgniter\Model;

class InsertModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'created_at', 'updated_at'];
}
