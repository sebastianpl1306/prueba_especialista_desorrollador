<?php

$test1 = [55, 58, 60];
$valueTest1 = "";

class CompleteRange{
    function build($values){
        $maxNumber = $values[0];
        $minNumber = $values[0];
        $endNumbers = [];
        foreach ($values as $key => $value) {
            if($value > $maxNumber){
                $maxNumber = $value;
            }
            if($value < $minNumber){
                $minNumber = $value;
            }
        }

        for ($i=$minNumber; $i <= $maxNumber; $i++) { 
            $endNumbers[$i] = $i;
        }

        return $endNumbers;
    }
}

$testing = new CompleteRange;

foreach ($testing->build($test1) as $key => $value) {
    $valueTest1 = $valueTest1.$value.", ";
}

echo $valueTest1;