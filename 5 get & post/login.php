
<?php
// inputan
$u="admin";
$p="123";

// proses
$iu = $_GET['username'];
$ip = $_GET['password'];

// decision / percabangan
if($iu == $u && $ip == $p){
    // ouput 1
    header("Location:dashboard.php");
    }else{
        // output 2
        echo "Username dan Password Salah!";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="username" id="username"><br>
         <input type="password" name="password" id="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
login.php

Menampilkan login.php.