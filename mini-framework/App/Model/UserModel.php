<?php

namespace Staditek\App\Model;
use Staditek\App\Config\Database;

class UserModel extends Database{
    public function show(){
        $sql = self::$conn -> prepare('SELECT * from user_data');
        $sql -> execute();

        return $sql->fetchAll(\PDO::FETCH_OBJ);
    }
}

