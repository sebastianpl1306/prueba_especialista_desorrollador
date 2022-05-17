<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <form action="../exercises/figuresBase.php" method="POST">
        <label for="">Ingrese la figura que desea calcular:</label>
        <select name="figureSelected" id="figureSelected">
            <option value="" selected disabled>Seleccione...</option>
            <option value="triangle">triangle</option>
            <option value="circle">circle</option>
            <option value="square">square</option>
        </select>
        <div id="areaCircle">
            <h3>Calcular el area de un circulo</h3>
            <label for="">Ingrese el valor del radio: </label>
            <input type="text" placeholder="Ingrese el radio..." name="circleRadius">
        </div>
        <div id="areaTriangle">
            <h3>Calcular el area de un triangulo</h3>
            <label for="">Ingrese la base: </label>
            <input type="text" placeholder="Ingrese la base..." name="baseTriangle">
            <label for="">Ingrese la altura: </label>
            <input type="text" placeholder="Ingrese la altura..." name="heightTriangle">
        </div>
        <div id="areaSquare">
            <h3>Calcular el area de un cuadrado</h3>
            <label for="">Ingrese el lado: </label>
            <input type="text" placeholder="Ingrese el lado..." name="sideSquare">
        </div>
        <input type="submit" value="Enviar">
    </form>
    <script src="../../js/showFigures.js"></script>
</body>
</html>