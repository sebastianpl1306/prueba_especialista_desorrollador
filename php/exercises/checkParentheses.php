<?php
$test1 = "((()";

class ClearPar{
    function build($stringCharacters){
        $totalCharactares = "";
        $startCharacter = false;
        for ($i=0; $i < strlen($stringCharacters); $i++) {
            if($stringCharacters[$i] == "("){
                $startCharacter = true;
            }

            if($stringCharacters[$i] == ")" && $startCharacter){
                $totalCharactares = $totalCharactares."()";
                $startCharacter = false;
            }
        }
        return $totalCharactares;
    }
}

$testingClearPar = new ClearPar;

echo $testingClearPar->build($test1);