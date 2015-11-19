<?php
session_start();
if (!isset($_SESSION['myusername'])) {
}
header('location: ../index.php')
?>

<html>
<body>
Login successful.

</body>
</html>