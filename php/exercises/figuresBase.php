<?php
    $figureSelected = $_POST['figureSelected'];
    $circleRadius = $_POST['circleRadius'];
    $baseTriangle = $_POST['baseTriangle'];
    $heightTriangle = $_POST['heightTriangle'];
    $sideSquare = $_POST['sideSquare'];

    switch ($figureSelected) {
        case 'triangle':
            $totalArea = ($baseTriangle*$heightTriangle)/2;
            echo "El area total del triangulo es: ".$totalArea;
            break;
        case 'circle':
            $totalArea = pow($circleRadius, 2)*3.1416;
            echo "El area total del circulo es: ".$totalArea;
            break;
        case 'square':
            $totalArea = $sideSquare * $sideSquare;
            echo "El area total del cuadrado es: ".$totalArea;
            break;
        default:
            echo "no se encontro la figura seleccionada";
            break;
    }