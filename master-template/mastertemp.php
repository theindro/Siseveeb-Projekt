<?php session_start();
if(!isset($_SESSION['myusername'])){
    header("Location:login/loggisisse.php");
}
?>
<html>
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
        echo "<p class='headtext'>Olete sisse loginud kasutajaga: <strong>". $_SESSION['myusername']."</strong></p>";
        ?>

        <a href="login/logout.php"><input id="button" type="button" value="Välju"></a>
    </div>
</div>



<div id='cssmenu'>
    <ul>
        <li><a href='#'>Pealeht</a></li>
        <li class='active has-sub'><a href='#'>Info</a>
            <ul>
                <li class='has-sub'><a href='#'>Product 1</a>
                    <ul>
                        <li><a href='#'>Sub Product</a></li>
                        <li><a href='#'>Sub Product</a></li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'>Product 2</a>
                    <ul>
                        <li><a href='#'>Sub Product</a></li>
                        <li><a href='#'>Sub Product</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href='?page=tunniplaan'>Tunniplaan</a></li>
        <li><a href='#'>Kontakt</a></li>
    </ul>
</div>

<?php if (file_exists("views/$page.php")) require "views/$page.php"; else require "views/error.php" ?>

<footer>
    <div class="footer">
        <p style="font-family:Arial; font-size: 12px; text-align:center; padding-top: 8px;">copyright: indro only doin work</p>
    </div>
</footer>

</div>
</body>
</html>
