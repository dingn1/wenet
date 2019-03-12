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
                <div class="col-xs-1 col-sm-3 col-md-2">
                    <img src="image/logo.jpg" class="img-responsive" alt="Responsive image">
                </div>
                <div class="col-xs-4 col-sm-6 col-md-6">
                    <form name="form" action="" method="post" >
                        <table border="0" cellpadding="0" cellspacing="3" align="center" width="400">
                            <tr>
                                <td><input size="30" type="text" name="UserName" id="UserName" value="Email"></td>
                                <td><input size="30" type="password" name="sPwd" id="sPwd" value="Password"></td>
                                <td colspan="2">
                                    <input type="button" onclick="window.location.href = 'html.html'" value="Sign In" style="background-color: red;   border-radius: 7px;">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col-xs-1 col-sm-3 col-md-2">
                    <a href="index.html">Homepage &nbsp;&nbsp;&nbsp;|</a>
                    <span role="presentation" onclick='controls("About")'> About us &nbsp;&nbsp;&nbsp;| </span>
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
        <script src="new.js"></script>
    </body>
</html>
