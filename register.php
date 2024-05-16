

<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Method: *");
    header("Access-Control-Allow-Headers: *");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // $data = file_get_contents("php://input");
        // $request = json_decode($data);
        // echo json_encode($request);
        // $fname = $_POST["fname"];
        // $lname = $_POST["lname"];
        // $email = $_POST["email"];
        // $password = $_POST["password"];
        // require("./controller/register.php");
        // $feedback = register($fname, $lname, $email, $password);





        $data = file_get_contents("php://input");
        $request = json_decode($data);
        // echo json_encode($request);
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $password = $request->password;
        require("./controller/register.php");
        $feedback = register($firstname, $lastname, $email, $password);
        
    }
    
    
    
    
    


?>



