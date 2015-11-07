<?php

    include "../includes/db_connect.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $err = "";


        $query = "SELECT * FROM `admin` WHERE username='$username'";
        $res = getObjectFromQuery($query);

        if(md5($password) == $res['pass']){
            session_start();
            $_SESSION['login'] = true;
            header("Location: index.php");
        }else{
            $err = "The username or password is incorrect";
        }

    }




?>

<!doctype html>
<html lang="am">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
    <div class="log-form">
        <h2>Login to your account</h2>
        <form action="" method="post">
            <span style="color: red"><?=$err?></span>
            <input type="text" title="username" name="username" placeholder="Username" />
            <input type="password" title="password" name="password" placeholder="Password" />
            <button type="submit" name="submit" class="btn">Login</button>
            <a class="forgot" href="#">Forgot Username?</a>
        </form>
    </div>
</body>
</html>


