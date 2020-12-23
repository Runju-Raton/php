<?php
$students=array(
    "Rahim",
    "Karim",
    "shafiq",
    "salam",
    "jabbar"
);
// var_dump($students);
// echo count($students);

$len=count($students);
for($i=0;$i<$len;$i++){
    echo $students[$i]."\n";
}