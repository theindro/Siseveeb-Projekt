<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<?php
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

if (isset($_POST["submit"])) {
    if (file_exists($target_file)) {
        echo "Üleslaetud fail juba eksisteerib.";
        $uploadOk = 0;
    }
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Faili üleslaadimine ebaõnnestus!";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Faili " . basename($_FILES["fileToUpload"]["name"]) . " üleslaadimine õnnestus!";

    } else {
        echo "Vabandame, üleslaadiisega tekkis probleeme.";
    }
}


?>


</body>
</html>




<!----<div data-role="popup" id="myPopup">
    <p>Kas soovite faili asendada?</p>
    <a href="#myPopup1" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">Jah</a>
    <a href="#myPopup2" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">Ei</a>
</div>--!>


