<?php
session_start();
include("controller.php");
if(isset($_POST["submit"])){
    $pwd= password_hash($_POST["password"], PASSWORD_BCRYPT);
    if(login($_POST["username"],$pwd)){
        $_SESSION["username"] = $_POST["username"];
        header("location:index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Document</title>
</head>
<header>My Blog</header>
<body>
<section class="container">
    <form action="login.php" method="post">
        <label for="username">Login :</label>
        <input type="text" name="username" id="username">
        <label for="password">password :</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Login" name="submit">
    </form>
</section>

<footer>&copy; GI 2022</footer>
<script src="public/js/script.js"></script>
</body>
</html>