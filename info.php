<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Wenet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css.css" type="text/css">
    </head>
    <body onload="getparm1()">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-1 col-sm-3 col-md-2">
                    <img src="image/logo.jpg" class="img-responsive" alt="Responsive image">
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10">
                    <section>
                        <ul class="nav nav-pills" role="tablist">
                            <li> <a href="index.html">Homepage &nbsp;&nbsp;&nbsp;|</a> </li>
                            <li role="presentation" onclick='control("About")'> About us &nbsp;&nbsp;&nbsp;| </li>
                            <li> <a href="career.html">career</a></li>
                        </ul>
                        <br><br>
                    </section>
                </div>
            </div>
        </div>

        <div  id="Contact" hidden>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2 col-sm-4 col-md-3">
                        <img src="image/logo.jpg" class="img-responsive" alt="Responsive image" >
                    </div>
                    <div class="col-xs-6 col-sm-8 col-md-9">
                    </div>
                </div>
            </div>
        </div>

        <div  id="Privacy" hidden>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2 col-sm-4 col-md-3">
                        <img src="image/logo.jpg" class="img-responsive" alt="Responsive image" >
                    </div>
                    <div class="col-xs-6 col-sm-8 col-md-9">
                    </div>
                </div>
            </div>
        </div>

        <div  id="Terms" hidden>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2 col-sm-4 col-md-3">
                        <img src="image/logo.jpg" class="img-responsive" alt="Responsive image" >
                    </div>
                    <div class="col-xs-6 col-sm-8 col-md-9">
                    </div>
                </div>
            </div>
        </div>

        <div  id="Help" hidden>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2 col-sm-4 col-md-3">
                        <img src="image/logo.jpg" class="img-responsive" alt="Responsive image" >
                    </div>
                    <div class="col-xs-6 col-sm-8 col-md-9">
                    </div>
                </div>
            </div>
        </div>

        <script>
            function getparm1()
            {
                var url = location.href;
                var tmp1 = url.split("?")[1];
                var tmp2 = tmp1.split("=")[1];
                var parm1 = tmp2;
                if (parm1 !== null)
                    control(parm1);
            }
        </script>

        <footer style="position:fixed; bottom:10px;">
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
        <script src="new.js"></script>

    </body>
</html>
