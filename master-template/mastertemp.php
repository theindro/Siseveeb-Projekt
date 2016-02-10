<?php
// check if logged in start session
session_start();
if(!isset($_SESSION['myusername'])){
    header("Location:login/loggisisse.php");
}
?>

<html>
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <title>KHK Siseveeb</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body class="body">

<div id="main-bar">
    <a href="index.php"><img src="assets/img/KHK_logo_png_311x71.png" class="logo"></a>
    <div id="loggedin">

        <?php
        echo "<p class='headtext'>Olete sisse loginud kasutajaga: <strong><a href='?page=seaded'>". $_SESSION['myusername']."</a></strong></p>";
        ?>

        <a href="login/logout.php"><input id="button" type="button" value="Välju"></a>
    </div>
</div>



<div id='cssmenu'>
    <ul>
        <li><a class="active" href='index.php'>Pealeht</a></li>
        <li><a href='?page=tunniplaan'>Tunniplaan</a></li>
        <li><a href='?page=materjal'>Tunnimaterjalid</a></li>
        <li><a href='?page=lisa'>Lisa</a></li>
        <li><a href='index.php'>link</a></li>
        <li><a href='index.php'>link</a></li>
    </ul>
</div>

<?php if (file_exists("views/$page.php")) require "views/$page.php"; else require "views/error.php" ?>

<footer>
    <div class="footer">
        <p style="color: grey;
        font-family:Arial;
        font-size: 12px;
        text-align:center;">
            © 2015 VS15. All rights reserved.</p>
    </div>
</footer>

</div>
</body>
</html>


