<?php
include("connectionfile.php");

$forename = $_POST["forename"];
$surname = $_POST["surname"];
$mainpower=$_POST["power"];


$sql="INSERT INTO superheros(firstname,lastname,mainSuperpower) VALUES ('$forname','$surname','$mainpower')";

if(mysqli_query($dp,$sql)){

}
else{
    echo "Error:".$sql."<br>".mysqli_error($db);
}
?>