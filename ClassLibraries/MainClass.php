<?php

require_once('DatabaseCon.php');

class mainClass extends DataBase{

    function dbtest(){
        $result = $this->dbh;
        return $result;
    }



    function saveInput($inputData)
    {

        if(is_object($inputData) || is_array($inputData))
        {
            $fullname = $inputData['fullname'];
            $email = $inputData['email'];

            $myQuery = "INSERT INTO input (
                fullname,
                email) VALUES (
                '$fullname',
                '$email'
                )";

            $result = mysqli_query($this->dbh, $myQuery);
            if(!$result){
            return "Error: " .mysqli_error($this->dbh);
            }else{
            return "good";
            }

        }
    }



}