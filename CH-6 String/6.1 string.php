<?php
    $name="Runju Raton";
    echo("My name is {$name}\n");
    echo('\n');//php can't parse placeholder inside single quotation
    echo('My name is {$name}');//php can't parse variable inside single quotation
    echo("\n");
    //we can use heredoc and nowdoc to write multiple line of string heredoc can parse varaible and placeholder but nowdoc can't parse
    $heredoc=<<<EOD
    {$name}\nBsc. Eng.
    EOD;                                
    echo ($heredoc);
    echo("\n");
    $nowdoc=<<<'EOD'
    {$name}\nBsc. Eng.
    EOD;
    echo ($nowdoc);
?>