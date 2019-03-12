<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>footer li {
                display:inline;
            }</style>
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
        <br><br>
        <form name="form2" class="the-form" action="change1.php" method="post" > 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="email" id="email" placeholder="Email" required><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="emails" id="emails" placeholder="new Email" required><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="reemail" id="reemail" placeholder="Email confirmation" required><br>
            <input type= "submit" name= "submit" value="update"  style="margin-left:100px; background-color: red;border-radius: 7px; ">			                
        </form>
        <br><br>
        <?php
        if (isset($_POST['email']) && isset($_POST['emails']) && isset($_POST['reemail'])) {
            $emailaddress = $_POST['email'];
            $reemail = $_POST['reemail'];
            $emails = $_POST['emails'];
            if ($emails = $reemail) {
                $connect = mysql_connect("127.0.0.1", "root", "") or die("Couldnt connect to database");
                mysql_select_db("userinfo") or die("Couldnt find database");
                $query = mysql_query("SELECT * FROM users WHERE emailaddress='$emails'");
                $numrows = mysql_num_rows($query);
                if ($numrows != 0) {
                    echo'new email already exists';
                    header('Location: change1.php');
                } else {

                    $query = "update info set emailaddress='$emaails' where emailaddress='$email'";
                    if ($query_run = mysql_query($query)) {
                        header('Location: edit.html');
                    } else {
                        echo 'Sorry, we couldn\'t update your info at this time. Try again later.';
                    }
                    mysql_select_db("login") or die("Couldnt find database");
                    $querys = "update users set emailaddress='$emaails' where emailaddress='$email'";
                    if ($query_run = mysql_query($querys)) {
                        header('Location: edit.html');
                    } else {
                        echo 'Sorry, we couldn\'t update your info at this time. Try again later.';
                    }
                }
            } else {
                echo 'new email does not match.';
                echo 'window.location.reload(true)';
            }
        }
        ?>

        <footer style="position:fixed; bottom:10px; display:inline;">                         
            <ul>
                <li role="presentation" onclick='controls("Contact")'>
                    Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                </li>

                <li role="presentation" onclick='controls("Help")'>
                    Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                </li>

                <li role="presentation" onclick='controls("Terms")'>
                    Terms&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                </li>    

                <li role="presentation" onclick='controls("Privacy")'>
                    Privacy
                </li>
            </ul>            
        </footer>
    </body>
</html>
