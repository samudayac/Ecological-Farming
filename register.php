<?php

include ('inc/connection.php');

if (isset($_POST['rgssubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $usertype = $_POST['usertype'];

    $select = "SELECT * FROM user WHERE email = '$email'";

    $result = mysqli_query($connection, $select);

    if($result && mysqli_num_rows($result) > 0){
        $error[] = 'User already exists!';
    } else {
        $insert = "INSERT INTO user (name, email, password, user_type) VALUES ('$name', '$email', '$password', '$usertype')";
        mysqli_query($connection, $insert);
        header('location:index.html');
    }
}
?>


