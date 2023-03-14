<?php
$name = filter_var(trim($_POST['review_name']));
$email = filter_var(trim($_POST['review_email']));
$text = filter_var(trim($_POST['review_text']));

if(mb_strlen($text) < 5 || mb_strlen($text) > 350){
    echo 'Incorrect length of text';
    exit();
}
else if(mb_strlen($email) < 4 || mb_strlen($email) > 18 || !strpos($email, '@')){
    echo "Incorrect length of email";
    exit();
}
else if(mb_strlen($name) < 2 || mb_strlen($name) > 50 ){
    echo "Incorrect length of name";
    exit();
}

require "/connect.php";
$mysql->query("INSERT INTO `reviews` (`review`,`email`,`name`)
VALUES('$text','$email','$name')");
$mysql->close();

header('Location: /kino/contacts.php');

?>