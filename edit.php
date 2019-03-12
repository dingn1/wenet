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
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <img src="image/logo.jpg" class="img-responsive" alt="Responsive image">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <section>
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" onclick='control2("About")'> About us &nbsp;&nbsp;&nbsp;| </li>
                            <li	 role="presentation" onclick='control2("Request")'>Request &nbsp;&nbsp;&nbsp;|</li>
                            <li role="presentation" onclick='control2("Feedback")'>Feed back &nbsp;&nbsp;&nbsp;| </li>
                            <li	 role="presentation" onclick='control2("Manage")'>Manage vehicles &nbsp;&nbsp;&nbsp;|</li>
                            <li> <a href="logout.php">Log out &nbsp;&nbsp;&nbsp;|</a> </li>
                        </ul>
                    </section>
                    <?php
                    session_start();
                    if (isset($_SESSION["username"])) {
                        echo "You are logged in as: " . $_SESSION["username"];
                    } else {
                        header("Location:index.php");
                    }
                    ?>
                    <script src="new.js"></script>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2 col-sm-3 col-md-3">
                    <img src="adainitiative.png" class="img-responsive" alt="Responsive image" >
                    <p class="test" style="width: 9em;">709 Van Siclen Ave New York NY UNITED STATES</p>
                </div>
                <div class="col-xs-4 col-sm-2 col-md-3">
                    <form name="form2" action="update.php" method="post" >
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="55" type="text" name="address" id="Address" placeholder="Address" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="55" type="text" name="phonenumber" id="phonenumber" placeholder="phonenumber" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="55" type="text" name="companyname" id="companyname" placeholder="CompanyName" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="55" type="text" name="city" id="City" placeholder="City" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="55" type="text" name="state" id="State" placeholder="State" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="55" type="text" name="country" id="Country" placeholder="Country" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="55" type="email" name="email" id="Email" placeholder="Email" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="55" type="text" name="price" id="Priceestimate" placeholder="Pricestimate" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="55" type="text" name="radius" id="Oerationradius" placeholder="Operation radius in mles" required><br>
                        <input type= "submit" name= "submit" value="update"	 style="margin-left:100px; background-color: red;border-radius: 7px; ">
                    </form>
                </div>
                <div class="col-xs-6 col-sm-7 col-md-6">
                    <input type="button" onclick="window.location.href = 'change_email.php'" value="Change email" style="margin-left:100px; background-color: red;border-radius: 7px; "><br>
                    <input type="button" onclick="window.location.href = 'change_password.php'" value="Change password" style="margin-left:100px; background-color: red;border-radius: 7px; ">
                </div>
            </div>
        </div>
        <br><br>

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
    </body>
</html>
