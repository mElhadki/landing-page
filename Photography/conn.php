
<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'photo';

$conn = new mysqli($host, $user, $pass, $db_name);

if($conn ->  connect_error){
    die('database connection error: ' . $conn -> connect_error);
}

?>