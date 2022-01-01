<?php 
    $name=$_POST['name'];
    $email=$_POST['email'];
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
                echo "<p class=\"titlePhp\"> Thank you for contacting us $name !</p>";
                echo "<p class=\"textPhp\"> We will respond to your email&nbsp: &nbsp;$email as soon as possible!</p> <br />";
                echo "<p class=\"textPhp\"> Date of submission:&nbsp" . date("Y/m/d") . "</p>";
            ?>

            <form>
                <button id="buttonPhp" type="submit" formaction="../html/index.html">Return to Site</button>
            </form>
        </div>
    </body>
</html>