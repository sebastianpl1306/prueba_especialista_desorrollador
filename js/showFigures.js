const areaCircle = document.getElementById('areaCircle');
const areaTriangle = document.getElementById('areaTriangle');
const areaSquare = document.getElementById('areaSquare');
const figureSelected = document.getElementById('figureSelected');

function showFigures() {
    switch (figureSelected.value) {
        case 'triangle':
            areaCircle.style.display = "none";
            areaTriangle.style.display = "block";
            areaSquare.style.display = "none";
            break;
        case 'circle':
            areaCircle.style.display = "block";
            areaTriangle.style.display = "none";
            areaSquare.style.display = "none";
            break;
        case 'square':
            areaCircle.style.display = "none";
            areaTriangle.style.display = "none";
            areaSquare.style.display = "block";
            break;
        default:
            areaCircle.style.display = "none";
            areaTriangle.style.display = "none";
            areaSquare.style.display = "none";
            break;
    }
}

showFigures();
figureSelected.addEventListener('click',showFigures);