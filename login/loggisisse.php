<html>
<head><title>Sign-In</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body class="body">

<div id="main-bar">
    <a href="../index.php"><img src="http://khk.ee/uploads/KHK_logo_png_311x71.png" class="logo"></a>
    <div id="Login">
        <form method="POST" action="checklogin.php">
        <label>Login:</label>
            <input placeholder="kasutajanimi" id="myusername" type="text" name="myusername" size="20">
        <label></label>
            <input placeholder="parool" id="mypassword" type="password" name="mypassword" size="20">
            <!-- login nupp !-->
        <input id="button" type="submit" name="submit" value="Sisene">
        </form>
    </div>
</div>
</div>
<div>
<p id="loggienne">Siseveeb</p>
<div class="suema">Info nägemiseks loggi sisse!</div>
</div>
<div>

</div>
</body>
</html>
