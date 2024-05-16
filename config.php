<?php
// phpinfo();
// $_user = "root";
// $_password = "";
// $_db = "store_db";
// $host = "localhost";


// try{
//     $_conn = mysqli_connect($host, $_user, $_password, $_db);
//     if($_conn){
//         // $query = "CREATE TABLE IF NOT EXISTS `admin`()";
//         echo "connected";
//     }
// }catch(Exception $e){
//     echo $e."unable to connect";
// }





// if ($mysqli->connect_errno) {
//         die("connection error: " . $mysqli->connect_error);
// }
// return $mysqli;













$_host = "localhost";
$_user = "root";
$_password = "";
$_db = "store_db";

try{
    $_conn = mysqli_connect($_host, $_user, $_password, $_db);
    if($_conn){
        // echo "connected";
        // $query = "INSERT INTO `admins`(`fname`, `lname`, `password`, `role_id`, `status`) VALUES ('john', 'smith', 'password', 1, 0)";
        // $result = mysqli_query($_conn, $query);

        // if($result){
        //     echo "Inserted into roles table";
        // }else{
        //     echo "could not inert into roles table";
        // }
    }else{
        echo "unable to connect";
    }

}catch(Exception $e){
    echo $e. "unable to connect to database";
}
