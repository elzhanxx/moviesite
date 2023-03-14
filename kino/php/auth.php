<?php
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));


$pass = md5($pass."mrji43rmi");

require "/connect.php";


$result= $mysql->query("SELECT * FROM `users` WHERE 
`login`='$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0){
    echo "Unknown user";
    exit();
}

setcookie('user' , $user['name'], time() + 3600 , "/");

$mysql->close();

header('Location: /kino/index.php');

?>