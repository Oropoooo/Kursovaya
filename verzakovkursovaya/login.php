<?php

require_once('db.php');

session_start();
$email = $_POST['email']; 
$_SESSION[$emails] = $email;
$pass = $_POST['pass'];

$sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        header('Location: indexthird.php');
    }
} else {
    echo "Нет такого пользователя";
}

?>
