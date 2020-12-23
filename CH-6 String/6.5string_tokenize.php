<?php
$greetings="Hello world!, How are you?";
$parts=explode(" ",$greetings);
print_r($parts);
echo PHP_EOL;
$original_string=join(" ",$parts);
echo $original_string; 
?>