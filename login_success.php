<?php
if(!isset($_SESSION['myusername'])){
    // go to login page code here.
    // in login page, store data into session, use following:
    $_SESSION['myusername']="myusername";
}
else{
    $username=$_SESSION['myusername'];// get previous session and go your project page
}
header('Location: members.php');
?>

<html>
<body>
Login Successful!
</body>
</html>