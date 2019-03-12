<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css.css" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body onload="getparm1()">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-1 col-sm-2 col-md-2">
                    <img src="image/logo.jpg" class="img-responsive" alt="Responsive image">
                </div>
                <div class="col-xs-11 col-sm-10 col-md-10" style="display:inline;">
                    <section>
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" onclick='control("About")'> About us &nbsp;&nbsp;&nbsp;| </li>
                            <li  role="presentation" onclick='control("Request")'>Request &nbsp;&nbsp;&nbsp;|</li>
                            <li role="presentation" onclick='control("Feedback")'>Feed back &nbsp;&nbsp;&nbsp;| </li>
                            <li  role="presentation" onclick='control("Manage")'>Manage vehicles &nbsp;&nbsp;&nbsp;|</li>
                            <li> <a href="edit.php">edit information&nbsp;&nbsp;&nbsp;|</a></li>
                            <?php
                            session_start();
                            if (isset($_SESSION["username"])) {
                                echo "You are logged in as: " . $_SESSION["username"];
                            } else {
                                header("Location:index.php");
                            }
                            ?>
                            <li> <a href="logout.php">Log out &nbsp;&nbsp;&nbsp;|</a> </li>
                        </ul>
                    </section>
                    <br><br>
                </div>
            </div>
        </div>
        <script src="new.js"></script>
        <div  id="About" hidden>

        </div>
        <div  id="Request" hidden>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2 col-sm-4 col-md-3">
                        <img src="adainitiative.png" class="img-responsive" alt="Responsive image">
                        <p class="test">709 Van Siclen Ave New York NY UNITED STATES</p>
                    </div>
                    <div class="col-xs-10 col-sm-8 col-md-9">
                        <table style="width:100%" border="1">
                            <tr>
                                <td>date</td>
                                <td>Time</td>
                                <td>Origin</td>
                                <td>Destination</td>
                                <td>Name</td>
                                <td>Wait time</td>
                                <td>Assigned driver</td>
                                <td>Status</td>
                            </tr>
                            <tr>
                                <td>ABC</td>
                                <td>Jackson</td>
                                <td>94</td>
                                <td>Jackson</td>
                                <td>94</td>
                                <td>94</td>
                                <td>Jackson</td>
                                <td>94</td>
                            </tr>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>80</td>
                                <td>Jackson</td>
                                <td>94</td>
                                <td>94</td>
                                <td>Jackson</td>
                                <td>94</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div  id="Feedback" hidden>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2 col-sm-4 col-md-3">
                        <img src="adainitiative.png" class="img-responsive" alt="Responsive image" >
                        <p class="test">709 Van Siclen Ave New York NY UNITED STATES</p>
                    </div>
                    <div class="col-xs-10 col-sm-8 col-md-9">
                        <form>
                            <textarea rows="1" cols="80"></textarea><br>
                            <textarea rows="9" cols="80"></textarea>
                        </form>
                    </div>
                </div></div>
        </div>
        <div  id="Manage" hidden>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2 col-sm-4 col-md-3">
                        <img src="adainitiative.png" class="img-responsive" alt="Responsive image" >
                        <p class="test">709 Van Siclen Ave New York NY UNITED STATES</p>
                    </div>
                    <div class="col-xs-10 col-sm-8 col-md-9">
                        <table style="width:100%" border="1">
                            <tr>
                                <td>VIN number</td>
                                <td>Username</td>
                                <td>Request</td>
                                <td>Legth of current task</td>
                                <td>Location</td>
                            </tr>
                            <tr>
                                <td>ABC</td>
                                <td>Jackson</td>
                                <td>94</td>
                                <td>Jackson</td>
                                <td>94</td>
                            </tr>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>80</td>
                                <td>Jackson</td>
                                <td>94</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

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
        <script>
            function getparm1()
            {
                var url = location.href;
                var tmp1 = url.split("?")[1];
				if(tmp1!=null){
                var tmp2 = tmp1.split("=")[1];
                var parm1 = tmp2;
                if (parm1 !== null)
                    control(parm1);
				}
            }
        </script>
    </body>
</html>
