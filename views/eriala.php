<?php
function upload()
{
// from uploads 1.

    if ($handle = opendir('')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                echo "$entry<br>";
            }
        }
        closedir($handle);
    }


// Check if a file has been uploaded
    if (isset($_FILES['uploaded_file'])) {
        // Make sure the file was sent without errors
        if ($_FILES['uploaded_file']['error'] == 0) {
            // Connect to the database
            $dbLink = new mysqli('127.0.0.1', 'root', '', 'test');
            if (mysqli_connect_errno()) {
                die("MySQL connection failed: " . mysqli_connect_error());
            }

            // Gather all required data
            $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
            $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
            $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
            $size = intval($_FILES['uploaded_file']['size']);

            // Create the SQL query
            $query = "
            INSERT INTO `file` (
                `name`, `mime`, `size`, `data`, `created`
            )
            VALUES (
                '{$name}', '{$mime}', {$size}, '{$data}', NOW()
            )";

            // Execute the query
            $result = $dbLink->query($query);

            // Check if it was successfull
            if ($result) {
                return 'Õnnestus!Fail on üleslaaditud!';
            } else {
                return 'Viga faili üleslaadmisel'
                    . "<pre>{$dbLink->error}</pre>";
            }
        } else {
            return 'Tekkis viga faili üleslaadimisel '
                . 'Error code: ' . intval($_FILES['uploaded_file']['error']);
        }

        // Close the mysql connection
        $dbLink->close();
    } else {
        return 'Viga faili üleslaadimisel';
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VS15 Õppematerjalid</title>
</head>
<body>

<div id="tunnimaterjal">

    <h2 style="text-align:center;">HTML ja CSS</h2>
    <?php
    // Hande file upload
    if (!empty($_POST)) {
        echo upload();
    }
    ?>
    <form class="laeyles" action="index.php?page=eriala" method="post" enctype="multipart/form-data">
        <p>Valige fail mida soovite üleslaadida</p>
        <input id="vali" type="file" name="uploaded_file">
        <input type="submit" id="submit" value="Laadige üles" name="submit"><br><br>
    </form>
    <?php
    // Connect to the database
    $dbLink = new mysqli('127.0.0.1', 'root', '', 'test');
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }

    // Query for a list of all existing files
    $sql = 'SELECT `id`, `name`, `mime`, `size`, `created` FROM `file`';
    $result = $dbLink->query($sql);

    // Check if it was successfull
    if($result) {
        // Make sure there are some files in there
        if($result->num_rows == 0) {
            echo '<p>There are no files in the database</p>';
        }
        else {
            // Print each file
            while($row = $result->fetch_assoc()) {
                echo "
                  <p class='upload123'>
                    <strong>{$row['name']}</strong>
                    {$row['created']}
                    <a href='index.php?page=get_file?id={$row['id']}'>Download</a>
                  </p>";
            }


        }

        // Free the result
        $result->free();
    }
    else
    {
        echo 'Error! SQL query failed:';
        echo "<pre>{$dbLink->error}</pre>";
    }

    // Close the mysql connection
    $dbLink->close();






    ?>
</div>
</body>
</html>

