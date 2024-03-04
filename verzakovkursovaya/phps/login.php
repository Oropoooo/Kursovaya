<?php
namespace emails;
class LoginEmail {
    public static $email;
}

require_once('../phps/db.php');

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM `users` WHERE email = '$email' AND pass = '$pass'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        header('Location: /verzakovkursovaya/pages/booking/bookingsec.php');
        exit();
    }
} else {
    echo '';
}

?>
