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
        if (isset($_SESSION["username"])) {
            echo "You are logged in as: " . $_SESSION["username"];
            echo "<p>";
            echo "<a href='logout.php'>Click here to logout</a>";
        } else {
            header("Location:index.php");
        }
        require 'core.inc.php';


        $password = $_POST["password"];
        $password_again = $_POST["repassword"];
        $securequestion = $_POST["securequestion"];
        $answer = $_POST["answer"];
        $emailaddress = $_POST["email"];
        $reemail = $_POST["reemail"];

        $connect = mysql_connect("127.0.0.1", "root", "") or die("Couldnt connect to database");
        mysql_select_db("login") or die("Couldnt find database");
        if ($password != $password_again || $emailaddress != $reemail) {
            echo 'Passwords or email address do not match.';
        } else {
            $query1 = "SELECT emailaddress FROM users WHERE emailaddress = '$emailaddress'";
            $query1_run = mysql_query($query1);
            if (mysql_num_rows($query1_run) != 0) {
                echo 'The username ' . $emailaddress . ' already exists.';
                header('Location: index.html');
            } else {
                $query = "INSERT INTO users (password, securequestion, answer, emailaddress) VALUES('$password', '$securequestion', '$answer', '$emailaddress')";
                if ($query_run = mysql_query($query)) {
                    $_SESSION['username'] = $emailaddress;
                } else {
                    echo 'Sorry, we couldn\'t register you at this time. Try again later.';
                    header('Location: index.php');
                }
            }
        }


        $company = $_POST["companyname"];
        $phone = $_POST["phonenumber"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];
        $price = $_POST["price"];
        $radius = $_POST["radius"];

        mysql_select_db("userinfo") or die("Couldnt find database");
        $query = "INSERT INTO info (emailaddress, companyname, phone, address, city, state, country, price, radius) VALUES('$emailaddress', '$company','$phone','$address','$city','$state','$country','$price','$radius')";
        if ($query_run = mysql_query($query)) {
            header('Location: html.html');
        } else {
            echo 'Sorry, we couldn\'t register your info at this time. Try again later.';
        }
        ?>
    </body>

</html>


