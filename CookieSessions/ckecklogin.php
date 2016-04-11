<?php
/**
 * Created by PhpStorm.
 * User: 1414397
 * Date: 11/04/2016
 * Time: 09:21
 */

$username=$_POST["username"];
$password=$_POST["password"];

if($username=="ami" && password=="jiyani")
{
    setcookie('access_level_cookie','standarduser');
}
header('Location:homepage.php')
?>