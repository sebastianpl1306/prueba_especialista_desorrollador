<?php
    $letterSize = $_POST['letterSize'];

    for ($contRow=0; $contRow <= $letterSize; $contRow++) {
        for ($i=1; $i <= $contRow; $i++) {
            echo $i;
        }
        echo "<br>";
    }