<?php
session_start();
?>
<html>
    <body>
        <a href="WEBSITE_MAIN.php">Click Here for your Profile</a>
        <br>
        <a href="WEBSITE_MAIN.php?logout=1">Click here to Logout</a>
        
        <?php
        $dbName = "bathbasics";
        $dbPass = "";
        if(isset($_GET['logout'])) {
             session_unset();
             session_destroy();
        }
    ?>
    </body>

</html>