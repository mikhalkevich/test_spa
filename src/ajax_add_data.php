<?php
require_once ('config/config.php');
require_once ('models/comment.php');
$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$body = $_POST['body'];
if($name AND $email AND $title AND $body){
    $arr_keys = ['user_name','user_email','title', 'body'];
    $arr_values = [$name, $email, $title, $body];
    $comment = new Comment($conn);
    $comment->add($arr_keys, $arr_values);
    $arr = array_combine($arr_keys, $arr_values);
    require_once('views/templates/comment_one.php');
}else{
    echo 'Пожалуйста, заполните все поля';
}


