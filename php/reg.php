<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
?>

<?php 
    class Account{
        public $username, $password, $email;

        function __construct($username, $password, $email){
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }

        public function __toString(){
            try{
                return (string) "<p class=\"textPhp\">Username:</p> <p class=\"varPhp\">" . $this->username . "</p><br />" .
                                "<p class=\"textPhp\">Password:</p> <p class=\"varPhp\">" . $this->password . "</p><br />" .
                                "<p class=\"textPhp\">Email:</p> <p class=\"varPhp\">" . $this->email . "</p><br />" .
                                "<p class=\"textPhp\">Date Created:</p> <p class=\"varPhp\">" . date("Y/m/d") . "</p><br />";
            }
            catch(Exception $exception){
                return "";
            }
        }
    }
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
                $user = new Account($username, $password, $email);
                echo "<p class=\"titlePhp\"> Thank you for joining Manga-tan! Welcome aboard! <br /> Your parameters are: </p>";
                echo $user;
            ?>

            <img class="middleImg" src="../img/bg3.png"/>

            <form>
                <button id="buttonPhp" type="submit" formaction="../html/index.html">Return to Site</button>
            </form>
        </div>
    </body>
</html>