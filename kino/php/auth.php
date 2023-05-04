<?php
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));


$pass = md5($pass."mrji43rmi");

require "connect.php";


$result= $mysqli->query("SELECT * FROM `users` WHERE 
`login`='$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if($user===null||count($user) == 0){
    echo "<script>alert('Неправильный логин или пароль!');history.back();</script>";
    exit();
}

setcookie('user' , $user['name'], time() + 3600 , "/");

$mysqli->close();

header('Location: /kino/index.php');

?>