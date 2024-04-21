<?php

namespace app\core;

Trait Model
{
    use Database;

    public function findAll()
    {
        $query = "select * from $this->table";
        return $this->query($query);
    }
    public function saveReservation($inputData){
        $query = "insert into users (date, time) values (:date, :time);";
        return $this->queryWithParams($query, $inputData);
    }



}