<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VS15 Õppematerjalid</title>
</head>
<body>

<div id="tunnimaterjal">
    <h2 style="text-align:center;">HTML ja CSS</h2>
<p>Õpetaja üles laetud tunnimaterjalid:</p>
    <p><strong>kuupäev: 05.01.16</strong> <a href="#">tunnimaterjal.pdf</a></p>
    <p><strong>kuupäev: 02.01.16</strong> <a href="#">materjalid.txt</a></p>
    <p><strong>kuupäev: 01.01.16</strong> <a href="#">töö.txt</a></p>

    <form class="laeyles" action="uploads/upload.php" method="post" enctype="multipart/form-data">
        <p>Valige fail mida soovite üleslaadida</p>
        <input id="vali" type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" id="submit" value="Laadige üles" name="submit"><br><br>
    </form>
</div>
</body>
</html>
