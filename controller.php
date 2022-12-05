<?php
function login($user,$password){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=GIDB', 'root', '');
        $req = $bdd->prepare("SELECT COUNT(*) FROM users where username=:username and password=:password");
        $req->execute(["username"=>$user,"password"=>$password]);
        $res = $req->fetch();
        return $res[0]==1;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    return false;
}
function register($user,$password,$email){
    try {
        $db = new PDO('mysql:host=localhost;dbname=GIDB', 'root', '');
        $req = $db->prepare("INSERT INTO users(username, password, email) VALUES (:u, :p,:e)");
        $req->execute(['u'=>$user,'p'=>$password,'e'=> $email]);
        return true;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>