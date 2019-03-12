<!DOCTYPE html>

<html>

    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <meta name="description" content="" />

        <meta name="keywords" content="" />

        <meta name="author" content="" />

        <title>login</title>

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
        ?>
    </body>

</html>



<?php
session_start();
$username = isset($_POST["username"]) ? $_POST["username"] : "";
$password = isset($_POST["sPwd"]) ? $_POST["sPwd"] : "";


if ($username && $password) {
    $connect = mysql_connect("127.0.0.1", "root", "") or die("Couldnt connect to database");
    mysql_select_db("login") or die("Couldnt find database");
    $query = mysql_query("SELECT * FROM users WHERE emailaddress='$username'");
    $numrows = mysql_num_rows($query);
    if ($numrows != 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $dbusername = $row["emailaddress"];
            $dbpassword = $row["password"];
        }
        if ($username == $dbusername && $password == $dbpassword) {
            $_SESSION["username"] = $dbusername;
            header("location: html.php");
        } else
            echo "Incorrect password";
    } else
        die("That username doesnt exist");
} else
    die("Please enter a username and password");
?>