<?php
    session_start();
    $username = $_POST['username'];
    $passsword = $_POST['password'];

    if ($username == 'admin' && $passsword == 'password123'){
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
    } else {
        echo "Invalid login. <a href = 'login.html'>Try again</a>";
    }
?>
