<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    echo    "Hello, world!";
    echo "<br>";
    echo    "Hello,". " " . "world" . "!";

    echo "<br>";
    echo 5*7;

    echo "<br>";
    $myname = "Frodo Baggins";
    $myage = 111;

    echo "My name is  ". $myname . " and I am " . $myage;

    $name="amit";
    echo "<br>";
    if($name=="ami"){
        print "i know you";
    }
    else{
        print"who are you";
    }

    $name="ami";
    echo "<br>";
    if($name=="ami"){
        print "i know you";
    }
    else{
        print"who are you";
    }

    $myage = 28;

    if ($myage >= 21) {
        echo "You can buy specs, mugs, and sausage rolls";
    }
    elseif ($myage >= 18) {
        echo "You can buy specs and mugs";
    }
    elseif ($myage >= 16) {
        echo "You can buy specs";
    }
    else {
        echo "You can't buy anything";
    }


    function squareValue($number)
    {
        echo  $number * $number;
    }
    $n = 6;
    squareValue($n);
    ?>
</p>
</body>
</html>