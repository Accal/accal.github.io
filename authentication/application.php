<?php
session_start();
$db = mysqli_connect('eu-cdbr-west-02.cleardb.net', 'bf4eb60b094a03', 'b8ddb2ae', 'heroku_4dd53535e106fb9');

include('registration_handler.php');
include('login_handler.php');
?>
