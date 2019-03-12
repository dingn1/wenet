<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="1;url=index.php">
    </head>

</html>
<?php
session_start();
$_SESSION['username'] = 0;
session_destroy();
echo "You have been logged out. <a href='index.php'>Return to Login</a>";
?>