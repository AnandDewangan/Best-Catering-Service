<?php
$conn = new mysqli('localhost', 'root', '', 'contact_form');

if($conn->connect_error){
    die('Error connecting to database : '.$conn->connect_error);
}
else{ 
    $data = $conn->prepare("insert into client_details(name, number, subject, message) values($name, $number, $subject, $message)");
}
?>