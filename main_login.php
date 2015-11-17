<?php session_start();?>
<html>
<head><title>Sign-In</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="body">

<div id="main-bar">
    <img src="http://khk.ee/uploads/KHK_logo_png_311x71.png" class="logo">
    <div id="loggedin">
        <?php echo "olete sisse loginud kasutajaga:" .$_SESSION['myusername'];
        ?>
    </div>
</div>
</div>
</body>
</html>
