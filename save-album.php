<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>saving album</title>
</head>
<body>
  <?php
$title = $_post['title'];
$year = $_post['title'];
$artist = $_post['title'];

//connect to db
$conn = new PDO('mysql:host=127.0.0.1; dbname =gcfreeman' ,'root', '');
//set up an sql instruction to the sql command
$sql= "insert into albums (title,year ,artist) values();";
//pass the input variables to the SQL command
$cmd = $conn-> prepare($sql);
$cmd->bindparam(':title', $title , pdo ::param_str,50);
$cmd->bindparam(':year', $year , pdo ::param_int);
$cmd->bindparam(':artist', $artist , pdo ::param_str,50);


//execute the insert

$cmd->execute();


//disconnect
$conn= null;
?>
</body>
</html>
