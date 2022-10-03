<?php
require_once ('config/config.php');
require_once ('models/comment.php');
$comment = new Comment($conn);
$all = $comment->all();
//comments
require_once ('views/layouts/base.php'); //template
?>