<?php

namespace App\Controllers;

use App\Models\DeleteModel;

class Delete extends BaseController{

  public function deletedata(){
    $model = new DeleteModel();

    $where = ['id' => 1];

    if ($model->delete($where)) {
      echo "Data Deleted Successfully!";
    }
  }

}

 ?>
