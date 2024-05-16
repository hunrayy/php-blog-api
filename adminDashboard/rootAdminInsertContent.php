<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Method: *");
    header("Access-Control-Allow-Headers: *");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = file_get_contents("php://input");
        $request = json_decode($data);
        $authorFirstName = $request->authorFirstName;
        $authorLastName = $request->authorLastName;
        $authorEmail = $request->authorEmail;
        $noteTitle = $request->noteTitle;
        $noteContent = $request->noteContent;
        require("../controller/adminDashboard/rootAdminInsertContent.php");
        $feedback = insertContent($authorFirstName, $authorLastName, $authorEmail, $noteTitle, $noteContent);
    }












?>