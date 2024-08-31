<?php require_once('inc/connection.php'); ?>
<?php

    $query = "SELECT * FROM query";
    $result_set = mysqli_query($config, $query);

    if($result_set){

        $table = '<table>';
        $table .= '<tr><th>Full Name</th><th>Email</th><th>Mobile No</th><th>Service</th><th>Message</th></tr>';

        while($record = mysqli_fetch_assoc($result_set)){
            $table .='<tr>';
            $table .='<td>' . $record['full_name'] . '</td>';
            $table .='<td>' . $record['email'] . '</td>';
            $table .='<td>' . $record['mobile_no'] . '</td>';
            $table .='<td>' . $record['service'] . '</td>';
            $table .='<td>' . $record['message'] . '</td>';
            $table .='</tr>';
        }
        $table .= '</table';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Query</title>
    <link rel="Stylesheet" href="style.css">

    <style>

        .view_query{
            padding-left: 15%;
            padding-right: 15%;
            padding-top: 100px;
            padding-bottom: 100px;
            margin: 75px 75px 75px 75px;
            background-color: rgb(145, 151, 156);
        }

        .view_query h2{
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

    <div class="view_query">
        <h2>View All Inqueries</h2><br><br>
        <?php echo mysqli_num_rows($result_set) . "Records Found. <hr>"; ?><br><br>
        <?php echo $table; ?>

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