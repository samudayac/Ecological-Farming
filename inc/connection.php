<?php
$connection = mysqli_connect('localhost', 'root', '', 'userdb');
$config = mysqli_connect('localhost', 'root', '', 'querydb');

if(mysqli_connect_errno()) {
    die('Database connection failed' . mysqli_connect_error());
}

?>