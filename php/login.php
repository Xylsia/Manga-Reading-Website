<?php 
    $username=$_POST['username'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thank You!</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <div class="bodyPhp">

            <?php
                echo "<p class=\"titlePhp\"> Welcome Back $username!</p>";
            ?>

            <img class="middleImg" src="../img/bg1.png"/>

            <form>
                <button id="buttonPhp" type="submit" formaction="../html/index.html">Return to Site</button>
            </form>
        </div>
    </body>
</html>