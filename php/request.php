<?php 
    $manga=$_POST['manga'];
    $url=$_POST['url'];
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
                echo "<p class=\"titlePhp\"> Thank you for your Feedback! </p>";
                echo "<p class=\"textPhp\"> Your desired manga title: </p> <p class=\"varPhp\">$manga</p>";
                echo "<p class=\"textPhp\"> Link: </p> <p class=\"varPhp\">$url</p>";
            ?>

            <form>
                <button id="buttonPhp" type="submit" formaction="../html/index.html">Return to Site</button>
            </form>
        </div>
    </body>
</html>