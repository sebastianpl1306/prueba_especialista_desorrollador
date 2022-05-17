var employees = [];
const containerInfoPerson = document.getElementById('containerInfoPerson');

function showInfo(namePerson) {
    $(document).ready(function () {
        $.ajax({
            url: "./js/personas.JSON"
        }).done(function (response) {
            employees = response.empleados;
            const searchName = new RegExp(namePerson);

            const employe = employees.filter(function(x){
                return searchName.test(x.nombre);
            })

            const infoEmploye = `
                <h4>${employe[0].nombre}</h4>
                <p><b>Email: </b>${employe[0].email}</p>
                <p><b>Telefono: </b>${employe[0].phone}</p>
                <p><b>Dirección: </b>${employe[0].address}</p>
                <p><b>Cargo: </b>${employe[0].position}</p>
                <p><b>Salario: </b>${employe[0].salary}</p>
                <p><b>skills: </b>${employe[0].skills}</p>
            `;

            containerInfoPerson.innerHTML = infoEmploye;

            console.log(employe);
        })
    })
}

function abrir(name){
    $('#infoUser').modal('show');
    showInfo(name);
}

function close() {
    $('#infoUser').modal('toggle');
}