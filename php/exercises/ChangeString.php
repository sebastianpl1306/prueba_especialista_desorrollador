<?php

$test1 = "123 abcd*3";
$test2 = "**Caza 52 ";
$test3 = "**Casa 52Z ";
$abc = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r","s", "t", "u", "v", "w", "x", "y", "z");
$ABC = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "R","S", "T", "U", "V", "W", "X", "Y", "Z");

class ChangeString{
    function build($stringValidate,$alphabet,$alphabetMayus){
        $resultString = "";
        for ($i=0; $i < strlen($stringValidate); $i++) {
            if(array_search($stringValidate[$i],$alphabet)+1 == sizeof($alphabet)){
                $resultString = $resultString.$alphabet[0];
            }else if (array_search($stringValidate[$i],$alphabet) != "") {
                $resultString = $resultString.$alphabet[array_search($stringValidate[$i],$alphabet)+1];
            }else{
                if(array_search($stringValidate[$i],$alphabetMayus)+1 == sizeof($alphabetMayus)){
                    $resultString = $resultString.$alphabetMayus[0];
                }else if (array_search($stringValidate[$i],$alphabetMayus) != "") {
                    $resultString = $resultString.$alphabetMayus[array_search($stringValidate[$i],$alphabetMayus)+1];
                }else{
                    $resultString = $resultString.$stringValidate[$i];
                }
            }
        }
        
        return $resultString;
    }
}

$testing = new ChangeString;

echo $test1."  ->  ".$testing->build($test1,$abc,$ABC)."<br>";
echo $test2."  ->  ".$testing->build($test2,$abc,$ABC)."<br>";
echo $test3."  ->  ".$testing->build($test3,$abc,$ABC)."<br>";


