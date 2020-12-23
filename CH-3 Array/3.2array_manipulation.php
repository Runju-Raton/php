<?php
$students=array(
    'a',
    'b',
    10,
    'd'
);
// $len=count($students);
/* for($i=0;$i<$len;$i++){
    echo $students[$i]."\n";
} */
$students[2]='c';
/* for($i=0;$i<$len;$i++){
    echo $students[$i]."\n";
} */
array_pop($students); //remove from last
// $len=count($students);
// for($i=0;$i<$len;$i++){
//     echo $students[$i]."\n";
// }  
array_shift($students); //remove from first
// $len=count($students);
// for($i=0;$i<$len;$i++){
//     echo $students[$i]."\n";
// }
array_unshift($students,'a');
array_push($students,'d');

$len=count($students);
for($i=0;$i<$len;$i++){
    echo $students[$i]."\n";
}
