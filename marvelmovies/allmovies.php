<?php
/**
 * Created by PhpStorm.
 * User: 1414397
 * Date: 15/03/2016
 * Time: 09:38
 */
include("connectionfile.php");
$sql = "SELECT * FROM marvelmovies;
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "marvelMovieid: " . $row["marvelMovieid"]. " - yearReleased: " . $row["yearReleased"]. " " . $row["title"]. "<br>";
    }
} else {
    echo "0 results";
}
?>