<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Album</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>

<?php

// connect
$conn = new PDO('myspl:host=localhost;dbname','root','');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//help with debugging problem

//set up query
$sql = "select albumid, title, year,artist FROM albums";

//run query and store the result
$cmd = $conn->prepare($spl);
$cmd->execute();
$albums = $cmd->fetchAll();
//start through the table
echo '<table class =" table table=striped table-hover"><tr><th> Title </th></tr></table><th>Year</th><th>Artist</th></tr>';

// loop through the data
foreach ($albums as $album){
    //print  each album
    echo '<tr><td>' .$album['title'].'</td>
    <td>' .$album ['year'].'</td>
     <td>' .$album ['artist'].'</td></tr>';
}

//end table
echo '</table>';


//disconnect
$conn = 'null';
?>
<!-- Latest   jQuery -->
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

