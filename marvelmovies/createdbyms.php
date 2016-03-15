<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Marvel Movies</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<head>
    <h1>Marvel Movies</h1>
    <ul>
        <li><a href="allmovies.php"> Display All Movies</a></li>
        <li><a href="createdbyms.php">Display Movies created by Marvel Studios</a> </li>
        <li><a href="createdafter2010.php">Display Movies created after 2010</a> </li>
        <li><a href="X-man.php">Display all X-Men Films</a> </li>
    </ul>
</head><?php
/**
 * Created by PhpStorm.
 * User: 1414397
 * Date: 15/03/2016
 * Time: 09:39
 */
include("connectionfile.php");
$sql = "SELECT * FROM marvelmovies WHERE productionStudio='Marvel Studios'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["marvelMovieID"]. "  " . $row["yearReleased"]. " " . $row["title"].  " " . $row["productionStudio"]." " . $row["notes"]."<br>";
    }
} else {
    echo "0 results";
}
?>
</body>
</html>

