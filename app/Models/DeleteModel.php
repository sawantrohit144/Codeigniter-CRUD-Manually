<?php

namespace App\Models;

use CodeIgniter\Model;

class DeleteModel extends Model{
  protected $table = 'users';
  protected $privatekey = 'id';
  protected $allowedFields = ['username','email','password'];
}

 ?>
