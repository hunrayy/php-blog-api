<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Method: *");
    header("Access-Control-Allow-Headers: *");
    
    // header("Content-type: Application/Json");

    // function registerUser(firstname, lastname, password){

    //     if($_SERVER["REQUEST_METHOD"] == "GET"){
    //         // echo json_encode($_SERVER);
    //         $request = file_get_contents("php://input");
    //         // $username->$request = "james";
    //         $data = json_decode($request);
    //         $firstname = $data->firstname;
    //         $lastname = $data->lastname;
    //         // $username = $data->username;
    //         $password = $data->password;
    //         $role_id = $data->role_id;
    //         require("config.php");
    //         // if(!$username && !$password){
    //         //     echo "Invalid data";
    //         // }
    
    //         // for selecting
    
    //         // $sql = "SELECT * FROM `admins` WHERE `id` = 1";
    //         // $result = mysqli_query($_conn, $sql);
    //         // if($result){
    //         // $feedback = mysqli_fetch_assoc($result);
    //         //     echo json_encode($feedback);
    //         // }
    //         // // echo json_encode($data);
    
    //         // for registration
    
    //         $sql = "INSERT INTO `admins`(`fname`, `lname`, `password`, `role_id`) VAlUE ('$firstname', '$lastname', '$password', '$role_id')";
    //         if($sql){
    //             $id = mysqli_insert_id($conn);
    //             echo json_encode([
    //                 "message" => "user registered successfully",
    //                 "type" => "success",
    //                 "insert_id" => $id
    //             ]);
    //         }else{
    //             echo mysqli_error($_conn);
    //         }
    //     }
    // }



    function loginUser($firstname, $password){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $request = file_get_contents("php://input");
            $data = json_decode($request);
            $firstname = $data->firstname;
            $password = $data->password;
            require("../config.php");
            
        }

    }

    // function createArticle($title, $content, $admin_id){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $request = file_get_contents("php://input");
            $data = json_decode($request);
            $title = $data->title;
            $content = $data->content;
            $admin_id = $data->admin_id;
            require("config.php");

            $id = "SELECT * FROM `admins` WHERE `role_id` = 2";
            $result = mysqli_query($_conn, $id);
            if($result){
                $feedback = mysqli_fetch_assoc($result);
                // echo json_encode($feedback)  ;
                $newid = json_decode(json_encode($feedback));

                echo json_encode($newid->role_id);
                
            }
            // echo $id;

    
            $sql = "INSERT INTO `authors`(`title`, `content`, `admin_id`) VAlUE ('$title', '$content', '$admin_id')";
            if($sql){
                $id = mysqli_insert_id($conn);
                echo json_encode([
                    "message" => "content successfully uploaded",
                    "type" => "success",
                    "insert_id" => $id
                ]);
            }else{
                echo mysqli_error($_conn);
            }
        }
    // }






?>