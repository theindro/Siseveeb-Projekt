<?php session_start();
if(!isset($_SESSION['myusername'])){
header("Location:index.php");
}
?>
<html>
<head>
    <title>KHK Siseveeb</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="body">

<div id="main-bar">
    <img src="http://khk.ee/uploads/KHK_logo_png_311x71.png" class="logo">
    <div id="loggedin">

        <?php
        echo "Tere tulemuast <strong>". $_SESSION['myusername']."</strong>";
        ?>

        <a href="logout.php"><input id="button" type="button" value="Välju"></a>
    </div>
    <h1 style="text-align:center;">Tunniplaan</h1>
    <div class="menuu";>
        <ul>
        <li><a class="meny" href="#">Pealeht</a></li>
        <li><a class="meny" href="#">Tunniplaan</a></li>
        <li><a class="meny" href="#">Info</a></li>
        </ul>
    </div>

    <table id="tabel";>
        <tr>
            <th>Kellaaeg</th>
            <th>Õppeaine nimi</th>
            <th>Õpetaja</th>
            <th>Tunnimaterjal</th>
            <th>Tunni moodle link</th>
        </tr>
        <tr>
            <td>andmed siia andmebaasist</td>
            <td>andmed siia andmebaasist</td>
            <td>andmed siia andmebaasist</td>
            <td>andmed siia andmebaasist</td>
            <td>andmed siia andmebaasist</td>

        </tr>
    </table>
</div>
</div>
</body>
</html>
