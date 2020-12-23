<?php
$foods=[
    'vegetables'=>"capsicum, brinjal, carrot",
    'fruits'=>"orange, banana, apple",
    'drinks'=>"water, milk, lemonjuice"
];
// echo $foods['vegetables'];
// echo "\n";
// echo count($foods);
// for($i=0;i<count($foods);$i++){
//     echo $foods[$i];
// }
/* foreach($foods as $keys=>$values){
    echo $keys."=".$values."\n";
} */

$keys=array_keys($foods);
// print_r($keys);
$values=array_values($foods);
// print_r($values);

for($i=0;$i<count($keys);$i++){
    
    echo $keys[$i]."\n";
    // echo $foods[$keys[$i]]."\n";
}
$values=array_values($foods);
print_r($values);