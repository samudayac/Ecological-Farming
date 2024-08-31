<?php

include ('inc/connection.php');

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    if(isset($_POST['submit'])){
        $sql = "INSERT INTO query (full_name, email, mobile_no, service, message) 
        VALUES ('$full_name', '$email', '$mobile_no', '$service', '$message')";
    
        $result = mysqli_query($config, $sql);
    
        if($result){
            header('location:user_page.html');
        }
        else{
            echo "ERROR: " . $sql . "<br>" . mysqli_error($config);
        }
    }
    


}


?>