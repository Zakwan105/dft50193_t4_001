<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGASAN 1</title>
</head>

<body>
    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo nl2br(fread($myfile, filesize("webdictionary.txt")));
    fclose($myfile);
    ?>
</body>

</html>