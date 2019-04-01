<?php
    include('config.php');
    session_start();
    $login_user = "";
    $_SESSION['login_user'] = "";
    $user_check = $_SESSION['login_user'];
    $session_check = mysqli_query($connection,"SELECT * FROM login WHERE Users LIKE '$user_check'");
    $row = mysqli_fetch_array($session_check,MYSQLI_ASSOC);
    if($row == FALSE) {
        echo(mysqli_error($connection));
    }
    $login_session = $row['username'];
    if(!isset($_SESSION['login_user'])){
        header('location : login.php');
    }
?>