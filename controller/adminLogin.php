
<?php
    require("config.php");
    function login($email, $password){
        global $_conn;
        mysqli_real_escape_string($_conn, trim($email));
        mysqli_real_escape_string($_conn, trim($password));
        if(empty($email) || empty($password)){
            echo "invalid user info...email and password required";
            $empty = "email and password is required";
            return json_encode([
                "message" => "user info issue",
                "error" => $empty
            ]);
        }
        try{
            $sql = "SELECT * FROM `admins` WHERE `email` = '$email' AND `password` = SHA('$password')";
            // echo $sql;
            // anything') OR ('1' = '1
            
            $result = mysqli_query($_conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                $admin_user = mysqli_fetch_assoc($result);
                // echo json_encode($admin_user);
        
                echo "Login successful, Welcome admin $email";
                //  $active_user = json_encode($user['firstname']);
                // echo $active_user;
                // session_start();
                // if($_SESSION['user']['active_user'] = $active_user){
                //     header("location: adminDashboard/dashboard.php");
                // }
                // return json_encode([
                //     "message" => "welcome admin $email"
                // ]);
            }else{
                $response = ([
                    "message" => "invalid email|password",
                    "code" => "login-error"
                ]);
                echo json_encode($response);
            }
        }catch(Exception $e){
            echo "not an admin $e";
            return json_encode([
                "message" => "unauthorized access",
                "error" => "not an admin"
            ]);
        }


    }

