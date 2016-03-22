<?php
/*
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'ba7adc8d866da9');
define('DB_PASSWORD', '26b08a1c');
define('DB_DATABASE', 'DB_PHP');

$db    = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>
*/

/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 18/11/2015
 * Time: 09:43
 */
$db = new mysqli(
    "eu-cdbr-azure-west-c.cloudapp.net",
    "b0c2ff384f05bb",
    "82b4d3a0",
    "mjc7778db"
);
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}

?>