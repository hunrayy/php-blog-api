<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Method: *");
    header("Access-Control-Allow-Headers: *");

    // header("Content-type: Application/Json");

    //server connection
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = file_get_contents("php://input");
        $request = json_decode($data);
        $email = $request->email;
        $password = $request->password;
        require("./controller/adminLogin.php");
        $feedback = login($email, $password);
    }





?>