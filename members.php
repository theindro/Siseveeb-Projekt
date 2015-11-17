<?php session_start();?>

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
        echo "Tere tulemuast (kasutajanimi)";
        ?>

        <a href="logout.php"><input type="button" value="Log out"></a>
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
