<?php
    require('val.php');
    if(isset($_POST['registerButton'])){

        $validate = new UserValidator($_POST);
        $errors = $validate->validateForm(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Manga-tan</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="mailto: jovana.krzanovic.18@singimail.rs, Jovana Kržanović">
		<meta name="description" content="read high quality manga online">
		<meta name="keywords" content="manga, japanese comic, high quality, online">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="shortcut icon" href="../img/icon.ico">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    
    <body>
        <header>
            <div class="headerTop">
                <div>
                    <form class="search" name="search" action="search.php">
                        <input type="text" class="searchText" placeholder="Search Manga..." name="search" size="50">
                        <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com " target="_blank" alt="Facebook"><span class="fab fa-facebook-square fa-3x"></span></a>
                    <a href="https://twitter.com" target="_blank" alt="Twitter"><span class="fab fa-twitter-square fa-3x"></span></a>
                    <a href="https://www.pinterest.com" target="_blank" alt="Pinterest"><span class="fab fa-pinterest-square fa-3x"></span></a>
                    <a href="https://www.tumblr.com" target="_blank" alt="Tumblr"><span class="fab fa-tumblr-square fa-3x"></span></a>
                    <a href="https://discordapp.com" target="_blank" alt="Discord"><span class="fab fa-discord fa-3x"></span></a>
                    <a href="https://www.deviantart.com" target="_blank" alt="DeviantArt"><span class="fab fa-deviantart fa-3x"></span></a>
                </div>
                <div class="dropdown">
                    <button class="dropButton">Login/Register</button>
                    <nav class="dropNav">
                        <a href="../html/login.html">Login</a>
                        <a class="active" href="register.php">Register</a>
                    </nav>
                </div>
                <div class="cleaner"></div>
            </div>

            <div class="headerMid">
                <h1 class="titleTop"><a href="../html/index.html">Manga-tan</a></h1>
                <h2 class="titleBot">High Quality Manga</h2>
                <div class="cleaner"></div>
            </div>

            <div class="headerBot">
                <nav>
                    <ul class="headerNav"> 
                        <li><a href="../html/index.html">Home</a></li>
                        <li><a href="../html/login.html">Login</a></li>
                        <li><a href="../html/dictionary.html">Manga Dictionary</a></li>
                        <li><a href="../html/dictionary.html">Latest Releases</a></li>
                        <li><a href="../html/dictionary.html">Ranking</a></li>
                        <li><a href="../html/dictionary.html">Shounen</a></li>
                        <li><a href="../html/dictionary.html">Shoujo</a></li>
                        <li><a href="../html/dictionary.html">Action</a></li>
                        <li><a href="../html/dictionary.html">Adventure</a></li>
                        <li><a href="../html/dictionary.html">Comedy</a></li>
                    </ul>
                </nav>
                <div class="cleaner"></div>
            </div>
        </header>

        <div class="middle">
            <img class="middleImg" src="../img/bg7.png">
            <h2 class="question">Sign Up</h2>
            <form class="form" method="POST" action="reg.php">
                <label class="label">Username:</label><br /><input type="text" id="username" name="username" placeholder="Enter username" size="50"/>
                <span class="error"><?php echo $errors['username'] ?? ''?></span><br />
                <label class="label">Password:</label><br /><input type="password" id="password" name="password" placeholder="Enter password" size="50"/>
                <span class="error"><?php echo $errors['password'] ?? ''?></span><br />
                <label class="label">Email Adress:</label><br /><input type="text" id="email" name="email" placeholder="Enter your Email Adress" size="50"/>
                <span class="error"><?php echo $errors['email'] ?? ''?></span><br />
                <input type="submit" id="registerButton" name="registerButton" value="Submit"/><br /><br /><br /><br />
                <label class="label">Already have an account?</label><br /><button type="submit" formaction="../html/login.html" id="logButton" >Login Here</button><br /><br /><br />
                <p style="color:#591b98;">By creating an account you agree to our <a href="../html/terms.html" style="text-decoration: none;">Terms</a> & <a href="../html/privacy.html" style="text-decoration: none;">Privacy.</a></p>
            </form>
        </div>

        <footer>
            <nav>
                <ul class="footerNav"> 
                    <li><a href="../html/about.html">About Us</a></li>
                    <li><a href="../html/contact.html">Contact Us</a></li>
                    <li><a href="../html/terms.html">Terms of Service</a></li>
                    <li><a href="../html/privacy.html">Privacy Policy</a></li>
                    <li><a href="../html/cookies.html">Cookies</a></li>
                    <li><a href="../html/request.html">Request Manga</a></li>
                </ul>
            </nav>
            <p class="copyright"><small>&copy; 2020 &hearts; <a href="https://singidunum.ac.rs" target="_blank">Singidunum</a> &hearts; <a href="../html/index.html">Manga-tan</a> &hearts; Jovana Kržanović 2018200030 &hearts; </small></p>
        </footer>
    </body>
</html>    