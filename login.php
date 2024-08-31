<?php

include ('inc/connection.php');

session_start();

if(isset($_POST['lgnsubmit'])){
        
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = $_POST['password'];

    $select = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($connection, $select);

    if($result && mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
            
        if($row['user_type'] == 'admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location: admin_page.html');
            exit();
        } elseif($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location: user_page.html');
            exit();
        } elseif($row['user_type'] == 'field_officer') {
            $_SESSION['field_officer_name'] = $row['name'];
            header('location: field_officer_page.html');
            exit();
        } else {
            $error[] = 'Invalid user type!';
        }

    } else {
        $error[] = 'Incorrect email or password!';
    }
}
?>

