<?php 
require_once('db.php'); 

// Проверяем, были ли отправлены данные формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login']; 
    $pass = $_POST['pass']; 
    $repeatpass = $_POST['repeatpass']; 
    $email = $_POST['email']; 

    if(empty($login) || empty($pass) || empty($repeatpass) || empty($email)){ 
        echo "Заполните все поля"; 
    } else { 
        if($pass != $repeatpass) { 
            echo "Пароли не совпадают"; 
        } else { 
            $sql = "INSERT INTO users (login,pass,email) VALUES ('$login', '$pass', '$email')"; 
            if ($conn->query($sql) === TRUE ){ 
                header('Location: index.php'); // Важно завершить выполнение скрипта после перенаправления
            } else { 
                echo "Ошибка: " . $conn->error; 
            } 
        } 
    } 
}

if ($conn->query($sql) === TRUE) {
    $_SESSION['block_hidden'] = true; // Устанавливаем переменную сессии
    header('Location: index.php');
    exit;
} else {
    echo "Ошибка: " . $conn->error;
}
?>
