<?php

namespace App\Controllers;

use App\Models\InsertModel;

class Insert extends BaseController{
  public function insertdata(){
    $model = new InsertModel();
    $data = [
      'username'   => 'Rohit',
      'email'      => 'rohit@gmail.com',
      'password'   => 'Rohit'
    ];
    if ( $model->insert($data) ) {
      echo "Data Inserted Successfully!";
    }

  }

}

 ?>
