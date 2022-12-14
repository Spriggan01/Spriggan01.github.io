<?php
    session_start();
    require_once '../inc/connect.php';

    $login = $_POST['login'];
	$password = md5($_POST['pswd']);

	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pswd` = '$password'");
	if (mysqli_num_rows($check_user) > 0) {
		$user = mysqli_fetch_assoc($check_user);

		$_SESSION['user'] = [
            "login" => $user['login'],
			"placeOfBirth" => $user['placeOfBirth'],
			"email" => $user['email'],
			"dob" => $user['dob'],
			"reg_date" => $user['reg_date']
		];
        header('Location: profile.php');
	} else {
        header('Location: ../index.php');
	}
?>