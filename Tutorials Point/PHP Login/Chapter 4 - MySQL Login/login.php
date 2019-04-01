<?php
    include('config.php');
    session_start();
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $sql = "SELECT * FROM login WHERE Users LIKE '$username' and Password LIKE '$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);
        // If Result Matches With User Name And Password There Must Be One Row
        if($count == 1){
            $_SESSION['myusername'] = "";
            $_SESSION['login_user'] = $username;
            header('location: welcome.php');
        }
        else{
            $error = "<h3>Incorrect Username & Password</h3>";
        }
    }
?>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body bgcolor = "#FFFFFF">
        <div align = "center">
            <div style = "width:300px; border: solid 1px #333333; " align = "left">
                <div style = "background-color:#333333; color:#FFFFFF; padding:10px;"><b>Login</b></div>
                    <div style = "margin:30px">
                        <form action = "login.php" method = "post">
                            <label class="control-label">User Name  : </label><input type = "text" class="form-control" name = "username"/><br /><br />
                            <label class="control-label">Password  : </label><input type = "password" class="form-control" name = "password" /><br/><br />
                            <input type = "submit" class="btn btn-success btn-lg" value = " Submit "/><br />
                        </form>
                        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php
                            echo $error; ?></div>
                    </div>
                </div>
        </div>
    </body>
</html>