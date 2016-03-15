<?php
/**
 * Created by PhpStorm.
 * User: 1414397
 * Date: 15/03/2016
 * Time: 09:39
 */
include("connectionfile.php");
$sql = "SELECT * FROM marvelmovies WHERE productionStudio='Marvel Studios'";
$result = mysqli_query($db, $sql);

?>