<?php

include("connectionfile.php");
$sql_query ="SELECT * FROM superheros" ;

$result = $db->query($sql_query);

while($row = $result ->fetch_array())
{
    echo "<p>" . $row['firstName'] ."<p>";
}
$result->close();
$db->close();

?>