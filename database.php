<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'quizzer';
//connect with database
$mysqli = new mysqli($host, $user, $password, $database);
//Error Handler
if($mysqli->connect_error){
    printf("Connect Failed: %s \n", $mysqli->connect_error);
    exit();
}
