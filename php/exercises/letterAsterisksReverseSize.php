<?php
    $letterSize = $_POST['letterSize'];

    for ($contRow=0; $contRow <= $letterSize; $contRow++) {
        for ($i=0; $i < $letterSize - $contRow; $i++) {
            echo "*";
        }
        echo "<br>";
    }