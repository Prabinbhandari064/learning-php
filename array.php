<?php
$name="bibek";
$age=21;
$height=(integer)5.9;
$isstudent=1;
echo "$name,$age,$height,$isstudent<br>";



//array
$furits="apple,bananna,mango,orange,graphs";
echo "$furits<br>";

$person=[

    "name"=>"bibek",
    "age"=>21,
    "city"=>"pokhara",

];
foreach ($person as $key => $value) {
    echo "$key : $value <br>";
}

function greet($name){
    echo "hello $name<br>";

}
$a="rachana";
$b="bibek";

greet($a);
greet($b);



function prabin($a, $b) {
    echo $a + $b;
}
prabin(3,5);
prabin(10,15);
prabin(7,13);