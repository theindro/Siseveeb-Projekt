<?php
session_start();
if (!isset($_SESSION['myusername'])) {
}
header('location: members.php')
?>

<html>
<body>
Login successful.

</body>
</html>