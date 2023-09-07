<?php
for($x = 33; $x <= 543; $x+=1){

    $val = $x;

    //deelbaarheid wordt vergemakkelijkt door er variabelen van te maken
    $vijf = 5;
    $two = 2;
    $nine = 9;
    $dev = "developer";
    $web = "web";

    //if statements die zorgen dat de delingen worden gedaan 

    //is_int wordt hier gebruikt om te kijken of het resultaat van de deling een int is
    if(is_int($val / $vijf)){
        echo "software";
    }

    if(is_int($val / $two)){
        echo "<b>{$val}</b>";
    }

    if(is_int($val / $nine)){
        $val = (string) $dev;
        echo $val;
    }

    if(is_int($x / $nine) && is_int($x / $vijf)){
        $val = (string) $web;
        echo $val;
    }

}
?>