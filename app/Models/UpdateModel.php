<?php

namespace App\Models;
use CodeIgniter\Model;

class UpdateModel extends Model
{
  protected $table = 'users';
  protected $id = 'id';
  protected $allowedFields = ['username','email','password'];
}

 ?>
