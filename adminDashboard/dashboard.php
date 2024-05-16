<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Method: *");
    header("Access-Control-Allow-Headers: *");
    
    session_start();
    if(isset($_SESSION['user']['active_user'])){
        echo "active user";
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            echo "welcome to the dashboard";
        }
    }else{
        echo "relocate to the login page";
    }




















    // if(isset($_SESSION['user']['active_user'])){
    //     echo "active user";
    //     if($_SERVER["REQUEST_METHOD"] == "GET"){
    //         echo "welcome to the dashboard";
    //     }
    // }else{
    //     echo "refer to login";
    // }















?>