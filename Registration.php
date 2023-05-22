<?php

if(empty($_POST["username"])){
    header("Location: Group6_FailedRegistrationForm.html");
}

if( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    header("Location: Group6_FailedRegistrationForm.html");
}

if(strlen($_POST["password"]) < 8){
    header("Location: Group6_FailedRegistrationForm.html");
}

if(!preg_match("/[a-z]/i", $_POST["password"])){
    header("Location: Group6_FailedRegistrationForm.html");
}

if(!preg_match("/[0-9]/", $_POST["password"])){
    header("Location: Group6_FailedRegistrationForm.html");
}

$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/Group6_Connect.php";

$sql = "INSERT INTO users (username, email, hash_password) 
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if( ! $stmt->prepare($sql)){
    die("SQL Error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["username"], 
                  $_POST["email"], 
                  $password_hash);
try{
if ($stmt->execute()) {

    header("Location: Group6_Login.php");
    exit();
                    
} 
}
catch (Exception $e) {              
    if ($mysqli->errno === 1062) {
        header("Location: Group6_FailedRegistrationForm.html");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

?>