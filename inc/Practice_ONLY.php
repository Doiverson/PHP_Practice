<?php
    $learn = array('Conditional', 'Arrays', 'Loops');
    echo implode("\n", $learn);

    $count = 0;
    while (list($key, $val) = (each($learn) && $count++) < 2){
        echo "$key => $val\n";
    }
?>