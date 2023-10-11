<?php

namespace App\Controllers;

use App\Models\UpdateModel;

class Update extends BaseController{
  public function updatedata(){
    $model = new UpdateModel();

    $data = [
      'username' => 'Kunal',
      'email'    => 'rohit@gmail.com',
      'password' => 'Rohit'
    ];
    $where = ['id' => 1];
    if ($model->update($where,$data)) {
      echo "Data Updated Successfully!";
    }
  }
}

 ?>
