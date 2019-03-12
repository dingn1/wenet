<!DOCTYPE html>

<html>

    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <meta name="description" content="" />

        <meta name="keywords" content="" />

        <meta name="author" content="" />

        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

        <title>Register</title>

    </head>

    <body>
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo "You are logged in as: " . $_SESSION['username'];
            echo "<p>";
            echo "<a href='logout.php'>Click here to logout</a>";
        } else {
            header("Location:index.php");
        }
        require 'core.inc.php';


        $password = $_POST['password'];
        $password_again = $_POST['repassword'];
        $securequestion = $_POST['securequestion'];
        $answer = $_POST['answer'];
        $emailaddress = $_POST['email'];
        $reemail = $_POST['reemail'];

        $connect = mysql_connect("127.0.0.1", "root", "") or die("Couldnt connect to database");


        $company = $_POST['companyname'];
        $phone = $_POST['phonenumber'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $price = $_POST['price'];
        $radius = $_POST['radius'];

        mysql_select_db("userinfo") or die("Couldnt find database");
        $query = "update info set companyname='$company', phone='$phone', address='$address', city='$city', state='$state', country='$country', price='$price', radius='$radius' where emailaddress='$emailaddress'";
        if ($query_run = mysql_query($query)) {
            header('Location: html.html');
        } else {
            echo 'Sorry, we couldn\'t change your info at this time. Try again later.';
        }
        ?>
    </body>

</html>


