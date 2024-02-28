<?php

require_once('db.php');

$email = $_POST['email']; 
$pass = $_POST['pass'];

$sql = "SELECT * FROM `users` WHERE email = '$email' AND pass = '$pass'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        header('Location: bookingsec.php');
    }
} else {
    echo '';
}

?>
