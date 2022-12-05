<?php
session_start();

include_once("header.php");

if($_SESSION["username"]=="Admin"){
    echo "<button id=\"signup\"><a href=\"http://localhost/pdo/register.php\">Register</a></button>";
} else
    echo "not Admin";

include_once("footer.php");
?>