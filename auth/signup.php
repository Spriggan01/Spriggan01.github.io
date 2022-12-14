<?php
    session_start();
    require_once '../inc/connect.php';

    $login = $_POST['login'];
    $placeOfBirth = $_POST['placeOfBirth'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $password_confirm = $_POST['pswd_rep'];
    $today = date("m.d.y");
    $reg_date = $today;
    $_POST['reg_date'] = $reg_date;
    $dob = $_POST['dob'];

    if($password === $password_confirm) {
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `placeOfBirth`, `email`, `pswd`,`reg_date`, `dob`) VALUES (NULL, '$login', '$placeOfBirth', '$email', '$password', '$reg_date', '$dob')");
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Passwords did not match';
        header('Location: ../index.php');
    }
?>