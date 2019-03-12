<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <link href="/" rel="canonical">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css.css" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2 col-sm-3 col-md-2">
                    <img src="image/logo.jpg" class="img-responsive" alt="Responsive image" >
                </div>
                <div class="col-xs-10 col-sm-9 col-md-10">
                    <span class="log">
                        <?php
                        session_start();
                        if (isset($_SESSION["username"])) {
                            echo "You are logged in as: " . $_SESSION["username"];
                            echo"&nbsp;&nbsp;&nbsp;&nbsp";
                            echo" <a href='html.php'>go to main content</a>&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo "<a href='logout.php'>Click here to logout</a>";
                        } else {
                            ?>
                            <form name="form" action="login.php" method="post" >
                                <table border="0" cellpadding="0" cellspacing="3" align="center" width="400">
                                    <tr>
                                        <td><input size="30" type="text" name="username" id="username" placeholder="Email" required></td>
                                        <td><input size="30" type="password" name="sPwd" id="sPwd" placeholder="Password" required></td>
                                        <td colspan="2">
                                            <input type= "submit" name= "submit" value="signin"  style="background-color: red;   border-radius: 7px;">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        <?php
                        }
                        ?>
                    </span>
                    <br><br>
                </div>
            </div>
        </div>

        <header>Place mass transportation in your hands with Wenet<br></header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-1 col-sm-3 col-md-2" >
                    <br><br><br>
                    <img src="image/phone.jpg" class="img-responsive" alt="Responsive image" >
                </div>
                <div class="col-xs-3 col-sm-4 col-md-5">
                    <br><br><br><br>
                    <h1 style="display:inline">Choice</h1><h3 style="display: inline">-choose from a wide variaty of drivers in your area based off teir prices ad ratings<img src="image/trans.JPG"></h3>
                    <br>
                    <h1 style="display:inline">Collaboration</h1><h3 style="display:inline">-we team up with local businesses to provide the best customer experience for every community<img src="image/people.jpg"></h3>
                    <br>
                    <h1 style="display:inline">Convinience</h1><h3 style="display:inline">-Wenet offers a bevy of on-demand drivers ready at the push of a button<img src="image/button.jpg"></h3>
                    <br><br>
                    <img src="image/picture.jpg" class="img-responsive" alt="Responsive image" >
                    <div class="col-xs-3 col-sm-5 col-md-5" style="font-weight:bold;font-size:1.6em;text-align:center;"><br>WenetCab
                        <ul style="text-align:left;">
                            <li>
                                All cash purchases
                            </li>
                            <li>
                                Promo codes that offer disscount on ridesand free wenet merchadise
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-7" style="font-weight: bold;font-size:1.6em;text-align:left;">
                        <br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp WENET?
                        <ul style="text-align:left;">
                            <li>
                                You can help us choose which on-demand service we'll select nest by emailing us at wenetincorporated@openmailbox.org
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-2 col-sm-4 col-md-5">
                    <h2>Become a partne with wenet & sign your business up</h2>
                    <form name="form2" class="the-form" action="register.php" method="post" >
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="companyname" id="companyname" placeholder="CompanyName" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="phonenumber" id="phonenumber" placeholder="phonenumber" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="address" id="address" placeholder="Address" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="city" id="city" placeholder="City" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="state" id="state" placeholder="State" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="country" id="country" placeholder="Country" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="price" id="price" placeholder="Pricestimate" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="radius" id="radius" placeholder="Operation radius in mles" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="email" name="email" id="email" placeholder="Email" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="email" name="reemail" id="reemail" placeholder="Email confirmation" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="password" name="password" id="password" placeholder="Password" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="password" name="repassword" id="repassword" placeholder="password conformation" required><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="securequestion" placeholder="securequestion" required></br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="30" type="text" name="answer" id="answer" placeholder="answer" required><br>
                        <h2>By clicking Sign Up, you agree to our Terms and that you have read our privacy policy.</h2><br>
                        <input type= "submit" name= "submit" value="register"  style="margin-left:100px; background-color: red;border-radius: 7px; ">
                    </form>
                    <br><br>
                    <a href="https://developer.apple.com/programs/ios/"><img src="image/appstore.jpg"></a>
                    <a href="http://play.google.com/store/apps"><img src="image/googleplay.JPG"></a>
                </div>
            </div>
        </div>

        <footer>
            <nav>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-4 col-sm-8 col-md-12">
                            <ul>
                                <li role="presentation" onclick='controls("Contact")'>
                                    Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                                </li>

                                <li role="presentation" onclick='controls("Help")'>
                                    Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                                </li>

                                <li role="presentation" onclick='controls("Terms")'>
                                    Terms&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                                </li>

                                <li role="presentation" onclick='controls("Privacy")'>
                                    Privacy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                                </li>
                                <li role="presentation" onclick='controls("About")'>
                                    About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                                </li>
                                <li>
                                    <a href="career.html">career</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </footer>
        <script src="new.js"></script>
    </body>
</html>