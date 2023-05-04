<?php
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));
$name = filter_var(trim($_POST['name']));

if(mb_strlen($login) < 5 || mb_strlen($login) > 50){
    echo 'Incorrect length of login';
    exit();
}
else if(mb_strlen($pass) < 4 || mb_strlen($pass) > 8){
    echo "Incorrect length of password";
    exit();
}
else if(mb_strlen($name) < 2 || mb_strlen($name) > 50){
    echo "Incorrect length of name";
    exit();
}

$pass = md5($pass."mrji43rmi");

require "connect.php";
$mysql->query("INSERT INTO `users` (`login`,`pass`,`name`)
VALUES('$login','$pass','$name')");
$mysql->close();

header('Location: /kino/index.php');

?>