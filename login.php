<?php
session_start();
include("controller.php");
if (isset($_POST["submit"])) {
    if (login($_POST["username"], $_POST['password'])) {
        $_SESSION["username"] = $_POST["username"];
        header("location:index.php");
    } else {
        echo "fill the data first";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/login.css?v=<?php echo time() ?>">
    <title>Document</title>
</head>

<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <section class="container">
        <form action="login.php" method="post">
            <label for="username">Username :</label>
            <br>
            <input type="text" name="username" id="username" placeholder="username">
            <br><br>
            <label for="password">Password :</label>
            <br>
            <input type="password" name="password" id="password" placeholder="password">
            <br><br>
            <div id="but">
                <button type="submit" value="Login" name="submit">Login</button>
                <button id="signup"><a href="http://localhost/blog_phpmyadmin/register.php">Register</a></button>
            </div>
            <br><br>
            <a href="http://localhost/blog_phpmyadmin/index.php" id="ggg">Continue as guest</a>
        </form>
    </section>

    <script src="public/js/script.js"></script>

</body>

</html>