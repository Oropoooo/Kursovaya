<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['name'];
        if (!move_uploaded_file($_FILES['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../signupmy.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES (NULL, '$full_name', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../signupmy.php');
    }

?>
