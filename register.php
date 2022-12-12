<?php
include("controller.php");
if (isset($_POST["submit"])) {
    $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if (register($_POST['username'], $pwd, $_POST['email'])) {
        header("location:login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Document</title>
</head>

<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <section class="container">
        <form action="register.php" method="post">
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
            <label for="email">email</label>
            <input type="text" name="email" id="email">
            <input type="submit" value="Login" name="submit">
        </form>
    </section>
</body>

</html>