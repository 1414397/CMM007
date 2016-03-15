<?php
/**
 * Created by PhpStorm.
 * User: 1414397
 * Date: 15/03/2016
 * Time: 09:40
 */
include("connectionfile.php");
$sql = "SELECT * FROM marvelmovies WHERE yearReleased>'2010' ";
$result = mysqli_query($db, $sql);

?>