<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Method: *");
    header("Access-Control-Allow-Headers: *");
    header("Content-Type: Application/Json");


    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $request = file_get_contents("php://input");
        $data = json_decode($request);
        $firstname = $data->firstname;



        $query = "SELECT FROM `admins` WHERE `id` = 1";
        require("../config.php");
        $result = mysqli_query($_conn, $query);
        echo $result;
        if($result){
            $feedback = mysqli_assoc($result)
        }
    }











?>