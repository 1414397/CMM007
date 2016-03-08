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
    echo "<br>";
    echo "<br>";
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

    $numberOfHobbits = 2;
    echo "<br>";
    echo "<br>";
    switch ($numberOfHobbits) {
        case 1:
            echo "1 sad hobbit";
            break;
            case2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 hobbits area crowd";
            break;
        default :
            echo "All the hobbits have gone home";
    }

    $wantedgood = "mugs";
    echo "<br>";
    echo "<br>";
    switch ($wantedgood) {
        case "specs":
            echo "You have to be 16 to buy specs";
            break;
        case "mugs":
            echo "You have to be 18 to buy mugs";
            break;
        case "sausage rolls":
            echo "You have to be 21 to buy sausage rolls";
            break;
        default:
            echo "You haven't selected any thing to buy";
    }

    echo "<br>";
    echo "<br>";
    $myArray = array("do", "re", "mi");
    echo $myArray[0];
    echo "<br>";
    $myArray[1] = "la"; // modifies at position 1
    echo $myArray[1];
    echo "<br>";
    unset($myArray[2]); // removes the array in position 2
    echo $myArray[2];

    echo "<br>";
    echo "<br>";
    $myArray = array("specs", "mugs", "sausage rolls");

    echo "Original Array";
    foreach($myArray as $x) {
        echo "<p>" . $x ."</p>";
    }

    $myArray[1] = "hugs"; // modifies position 1 (re)

    echo "Swap in Hugs with Mugs";
    foreach($myArray as $x) {
        echo "<p>".  $x  ."</p>";
    }


    unset($myArray[2]); // removes the array in position 2

    echo "Removed Sausage Rolls";
    foreach($myArray as $x) {
        echo "<p>" . $x . "</p>";
    }


    echo "<br>";
    echo "<br>";
    for ($i = 1; $i < 10; $i++) {
        echo "<p>Hello!</p>";
    }

    echo "<br>";
    echo "<br>";

    for ($i = 1; $i < 30; $i++)
    {
        if($i != 1)
        {
            echo "<p>On the " . $i . " of the month following products are available  ";

            if ($i % 2 != 0) {
                echo "Sausage Rolls ";

            }
            if ($i % 3 != 0) {
                echo "Mugs ";

            }
            if ($i % 4 != 0) {
                echo "Specs";

            }
        }
        else
        {
            echo "<p>On the " . $i . " of the month no products are available";
        }
        echo "<p>";
    }


    echo "<br>";
    echo "<br>";
    $length = strlen("david");
    print $length;

    echo "<br>";
    echo "<br>";
    $myname = "David";
    $partial = substr($myname, 0, 3);
    print $partial;

    echo "<br>";
    echo "<br>";
    $uppercase = strtoupper($myname);
    print$uppercase;
    echo "<br>";
    echo "<br>";
    $lowercase = strtolower($uppercase);
    print $lowercase;


    echo "<br>";
    echo "<br>";
    strpos("emily", "e");
    echo "<br>";
    strpos("emily", "i");
    echo "<br>";
    strpos("emily", "ily");
    echo "<br>";
    strpos("emily", "zxc");

    echo "<br>";
    echo "<br>";
    $round = round(M_PI);
    print $round;
    echo "<br>";
    $round_decimal = round(M_PI, 4);
    print $round_decimal;

    echo "<br>";
    print rand(1, 10);
    echo "<br>";
    print rand();

    echo "<br>";
    echo "<br>";
    $fav_bands = array();
    array_push($fav_bands, "Katy Perry");
    array_push($fav_bands, "The Peapods");
    array_push($fav_bands, "Nickelback");
    print count($fav_bands);
    echo "<br>";
    foreach($fav_bands as $x) {
        echo "<p>" . $x . "</p>";
    }

    echo "<br>";
    echo "<br>";
    $array = array(5, 3, 7, 1);
    sort($array);
    print join(", ", $array);


    echo "<br>";
    echo "<br>";
    $array = array(5, 3, 7, 1);
    rsort($array);
    print join(" : ", $array);

    echo "<br>";
    echo "<br>";

    function squareValue($number)
    {
        echo  $number * $number;
    }

    $n = 6;
    squareValue($n);

    echo "<br>";
    echo "<br>";
    $lArray = array("Ami", "Paril", "Mason", "Aarna", "Fiona", "Chirag", "Sara", "Yeasha" , "Kinjal", "Ashu");
    sort($lArray);
    $personwin = (rand(0,count($lArray))) - 1;
    echo "<p>The winner  is " . strtoupper($lArray[$personwin]) . "</p>";
    unset($lArray[$personwin]);
    $personwin = (rand(0,count($lArray))) - 1;
    echo "<p>The winner of all the mugs is " . strtoupper($lArray[$personwin]) . "</p>";
    unset($lArray[$personwin]);
    $personwin = (rand(0,count($lArray))) - 1;
    echo "<p>The winner of all the sausage rolls is " . strtoupper($lotteryArray[$winner]) . "</p>";

    ?>


</p>
</body>
</html>