<?php

namespace app\models;
use app\core\Model;

class User

{
    use Model;

    protected $table = 'users';

    public function getAllUsers() {
        return $this->findAll();
    }

    public function saveUser($inputData){
        $query = "insert into users (firstName, lastName) values (:firstName, :lastName);";
        return $this->queryWithParams($query, $inputData);
    }
}