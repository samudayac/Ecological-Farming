<?php require_once('inc/connection.php'); ?>
<?php

    $user = "SELECT * FROM user";
    $user_result_set = mysqli_query($connection, $user);

    if($user_result_set){

        $table1 = '<table>';
        $table1 .= '<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>User Type</th></tr>';

        while($record = mysqli_fetch_assoc($user_result_set)){
            $table1 .='<tr>';
            $table1 .='<td>' . $record['id'] . '</td>';
            $table1 .='<td>' . $record['name'] . '</td>';
            $table1 .='<td>' . $record['email'] . '</td>';
            $table1 .='<td>' . $record['password'] . '</td>';
            $table1 .='<td>' . $record['user_type'] . '</td>';
            $table1 .='</tr>';
        }
        $table1 .= '</table';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="Stylesheet" href="style.css">

    <style>

        .view_users{
            padding-left: 15%;
            padding-right: 15%;
            padding-top: 100px;
            padding-bottom: 100px;
            margin: 75px 75px 75px 75px;
            background-color: rgb(145, 151, 156);
        }

        .view_users h2{
            font-size: 30px;
            font-weight: 700;
            color: rgb(0, 0, 0);
        }

        table {border-collapse: collapse; }
        td, th {border: 2px solid black; padding 10px; }
    </style>
</head>

<body>

<header>
        <h2 class="logo">DOA</h2>
        <nav class="navigation">
            <a href="admin_page.html">Home<span></span></a>
            <a href="products.html">Products<span></span></a>
            <a href="services.html">Services<span></span></a>
            <a href="aboutus.html">About<span></span></a>
            <a href="contactus.html">Contact Us<span></span></a>
            <a href="index.html">Logout<span></span></a>
        </nav>
    </header>

    <div class="view_users">
        <h2>View All Users</h2><br><br>
        <?php echo mysqli_num_rows($user_result_set) . "Records Found. <hr>"; ?><br><br>
        <?php echo $table1; ?>

    </div>

    <footer>
        <section class="secf">
            <a class="a1" href="contactus.html">Contact Us</a> |
            <a class="a1" href="aboutus.html">About Us</a> |
            <a class="a1" href="Terms&Conditions.html">Terms & Conditions</a>
        </section>
        <p class="ftp">&copy; 2024 DOA. All Right Reserved</p>
    </footer>

</body>
</html>
<?php mysqli_close($config); ?>