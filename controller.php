<?php
function login($user, $password)
{
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=GIDB', 'root', '');
        $test = $bdd->prepare("select password from users where username=:username");
        $test->execute(["username" => $user]);
        $res = $test->fetch();
        return password_verify($password, $res[0]);
    }
    catch(PDOException $e) {
        echo "username and or password is wrong";
    }
    return false;
}
function get_data(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=GIDB', 'root', '');
        $data = $db->prepare("select username,score from users order by score DESC limit 3");
        $data->execute();
        $res = $data->fetchAll();
        return $res;
    }
    catch(PDOException $e){
    }
    return false;
}
function register($user, $password, $email)
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=GIDB', 'root', '');
        $req = $db->prepare("INSERT INTO users(username, password, email,score) VALUES (:u, :p,:e,:s)");
        $req->execute(['u' => $user, 'p' => $password, 'e' => $email, 's' => 0]);
        return true;
    }
    catch(PDOException $e) {
        echo ($e);
    }
    return false;
}

?>