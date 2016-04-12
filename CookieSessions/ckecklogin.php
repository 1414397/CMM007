<?php
/**
 * Created by PhpStorm.
 * User: 1414397
 * Date: 11/04/2016
 * Time: 09:21
 */

$username=$_POST["name"];
$password=$_POST["password"];


if($username=="ami" && $password =="jiyani")
{
    setcookie('access_level_cookie','standarduser');
}
elseif($username=="1414397" && $password =="ami"){
    setcookie('access_level_cookie','root');
}
header('Location:homepage.php');
?>