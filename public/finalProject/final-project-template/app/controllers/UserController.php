<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

class UserController extends Controller
{
    public function getUsers()
    {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->getAllUsers();
        echo json_encode($users);
        exit();
    }


    public function saveReservation($inputData){
        $query = "insert into users (date, time) values (:date, :time);";
        return $this->queryWithParams($query, $inputData);
    }

    public function saveUser() {

    }

    public function viewUsers() {
        
    }

}