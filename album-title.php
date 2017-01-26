<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Album titile</title>
    </head>
<body>

<?php

// connect to db
$conn = new  PDO('mysql:host=localhost;dbname=gcfreeman1','root','');
//write on  sql query to select the album title
$spl ="SELECT title FROM albums";
//execute the query and store the result
$cmd = $conn->prepare($spl);
$cmd->execute();
$albums = $cmd->fetchAll();
// loop through the data
foreach ($albums as $album) {
// display the title using echo
    echo $album['title'], '<br/>';
}

//disconnect
$conn = 'null';
?>
</body>
</html>

