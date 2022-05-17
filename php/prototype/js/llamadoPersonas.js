var employees = [];
var employessFilter = [];
var employessShow = [];
var containerInfoEmployees = document.getElementById('containerInfoEmployees');
var searchPerson = document.getElementById('searchPerson');

function realizarBusqueda(){
    $(document).ready(function () {
        $.ajax({
            url: "./js/personas.JSON"
        }).done(function (response) {
            employees = response.empleados;
            const searchEmail = new RegExp(searchPerson.value);

            employessFilter= employees.filter(function(x){
                return searchEmail.test(x.email);
            })

            let documentHTML = "";

            if(!employessFilter){
                employessShow = employees;
            }else{
                employessShow = employessFilter;
            }

            for(var j = 0; j < employessShow.length; j++){
                documentHTML += `
                    <tr >
                        <td>
                            <button type="button" class="btn btn-link" onclick="abrir('${employessShow[j].nombre}')">${j}</button>
                        </td>
                        <td>${employessShow[j].nombre}</td>
                        <td>${employessShow[j].email}</td>
                        <td>${employessShow[j].position}</td>
                        <td>${employessShow[j].salary}</td>
                    </tr>
                    `
            }

            containerInfoEmployees.innerHTML = documentHTML;
        })
    })
}

realizarBusqueda();
searchPerson.addEventListener('keyup',realizarBusqueda);