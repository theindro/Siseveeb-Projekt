<?php
$servername = "localhost";
$username = "root";
$password = "";

// connect to mysql
$con = mysql_connect('localhost', 'root', '')
or die("ERR: Connection");

// connect to database
$db = mysql_select_db("test", $con)
or die("ERR: Database");

$sql = "
INSERT INTO tunniplaan (opetaja, klass, moodlelink, ainenimi)
VALUES ('$_POST[opetaja]','$_POST[klass]','$_POST[moodlelink]','$_POST[ainenimi]')";
$exec = mysql_query($sql, $con);
if (!$exec) die(mysql_error());

echo "Andmed on andmebaasi sisestatud!";

mysql_close($con)
?>
<a href="index.php?page=lisa">Suuna tagasi</a>
