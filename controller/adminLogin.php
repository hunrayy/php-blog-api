<!-- controllers for all database connection -->
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
    $sql = "SELECT * FROM `admins` WHERE `email` = '$email' AND `password` = SHA('$password')";
    $result = mysqli_query($_conn, $sql);
    if(mysqli_num_rows($result) == 1) {
        $admin_user = mysqli_fetch_assoc($result);
        // echo json_encode($admin_user);
        $role_id = json_decode(json_encode($admin_user))->role_id;
        if($role_id == 1){
            // echo "Welcome super admin $email";
            $active_user = json_encode($admin_user['firstname']);
            // echo $active_user;
            session_start();
            if($_SESSION['user']['active_user'] = $active_user){
                header("location: adminDashboard/dashboard.php");
            }

            // return json_encode([
            //     "message" => "welcome $email"
            // ]);
        }else if($role_id !== 1){
            echo "Welcome admin $email";
            return json_encode([
                "message" => "welcome admin $email"
            ]);
        }
        
    }else{
        echo "not an admin";
        return json_encode([
            "message" => "unauthorized access",
            "error" => "not an admin"
        ]);
    }













    // return json_encode([
    //     "message" => "testing";
    // ]);

}
?>
