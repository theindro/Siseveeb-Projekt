<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id="pealeht">
    <p>Lisa tunnimaterjal andmebaasi:</p>

    <form action="insert.php" method="post">
        <p>Õpetaja nimi:</p>
        <input placeholder="Mart Mets" class="lisama" name="opetaja" type="text">

        <p>Ainenimetus:</p>
        <input placeholder="Matemaatika" class="lisama" name="ainenimi" type="text">

        <p>Klass:</p>
        <input placeholder="A404" class="lisama" name="klass" type="text">

        <p>Moodlelink:</p>
        <input placeholder="Moodle kursuse link" class="lisama" name="moodlelink" type="text">
        <br>
        <button style="margin-top: 10px; margin-left: 25px;" class="submit" id="submit">Sisesta</button>
    </form>

</div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from tunniplaan;";

    $result = $conn->query($sql);

    echo "
<table class='tabl'>
<tr>
<th>Nr</th>
<th>Õpetaja Nimi</th>
<th>Ainenimi</th>
<th>Klass</th>
<th>Moodlelink</th>
</tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["tunniplaan_id"] . " </td>
                <td>" . $row["opetaja"] . " </td>
                <td> " . $row["ainenimi"] . "</td>
                <td> " . $row["klass"] . " </td>
                <td> " . $row["moodlelink"] . "</td>
                </tr>";
    }
    echo "</table>";
    $conn->close();
    ?>
</div>
</body>
</html>