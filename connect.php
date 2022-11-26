<?php

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $sub = $_POST['msg'];

    // database connection
    $conn = new mysqli('localhost', 'root', '', 'course');
    if($conn->connect_error){
        die('connection faild :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration (firstname, email, sub, msg) values(?,?,,?,?)");
        $stmt->bind 
    }

?>