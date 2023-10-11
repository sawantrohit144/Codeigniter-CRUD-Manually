<?php

namespace App\Controllers;

class CreateTable extends BaseController
{
    public function table()
    {
        $db = \Config\Database::connect();
        $query = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        );";

        $db->simpleQuery($query);
        echo "Table 'users' created successfully.";
    }
}

 ?>
