<?php
    session_start();
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" href="Icon.png" />
    </head>
    <body>
    <?php
    $msg = "";
    if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
        if($_POST['username'] == "Bilal" && $_POST['password'] == "Saadi"){
            $_SESSION['valid'] = true;
            $_SESSION['time'] = time();
            $msg = "<h3>You Have Entered A Valid Username & Password.<br><br></h3>";
        }
        else{
        $msg = "<h3>Incorrect Username & Password</h3>";
        }
    }

    ?>
    <nav>
        <form method ="post" action = "index1.php">
            <img src="Icon.png" width="20%"><input type="text" name="username" placeholder="Username = Bilal">
            <img src="Key.png" width="20%"><input type="password" name="password" placeholder="Password = Saadi" required>
            <center>
                <input id="login" name="login" type="submit" value="Login">
            </center>
        </form><br><br>
        <?php
            echo $msg;
        ?>
        <h2>Click here to clean <a href = "index2.php" title = "Logout">Session.</a></h2>
    </nav>
    <input id="button" type="text"  maxlength="0">
    <div>
        <input id="options" type="text" placeholder="Username" required>
        <input id="options" type="text" placeholder="Email" required>
        <input id="options" type="password" placeholder="Password" required>
        <input id="submit" type="submit" value="Login" required>
        <input id="reset" type="reset" value="Reset" required>
    </div>
    </body>
    </html>
    </body>
</html>