<?php
/**
 * Created by PhpStorm.
 * User: 1414397
 * Date: 11/04/2016
 * Time: 09:21
 */


session_start();

$accesslevel=$_COOKIE['access_level_cookie'];

echo $accesslevel;
displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accesslevel) {
    if ($accesslevel == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($accesslevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
    elseif($accesslevel == "noaccess")
    {
        echo "<br>You can not login";
    }
}

?>