

$(document).ready(function() {
    // Inicializa DataTables en la tabla con el ID "miTabla"
    $('#miTabla').DataTable({
        "order": [[0, "asc"]],
        "paging": true,
        "pageLength" : 10,
        "lengthChange": false,
        "language": { // Personalizar el texto de la interfaz
            "search": "",
            "lengthMenu": "Mostrar _MENU_ filas",
            "infoEmpty": "No hay entradas disponibles",
            // "paginate": {
            //     "first": "Primero",
            //     "last": "Último",
            //     "next": "Siguiente",
            //     "previous": "Anterior"
            // }
        },
        initComplete: function() {
            $('.dt-search').addClass("flex justify-end m-3 p-3 ");
            $('#dt-search-0').addClass("rounded-xl rounded-principal w-72");
            $('#dt-search-0').attr('placeholder', 'Buscar...');
            $('.dataTables_filter label').contents().filter(function() {
                return this.nodeType === 3;
            }).remove();

            $('#dt-search-2').addClass("rounded-xl rounded-principal"); // input de datatables

        }
    });



});
function openModal(id) {
    document.getElementById('modal').classList.remove('hidden');
}
function closeModal(id) {
    document.getElementById('modal').classList.add('hidden');
}
function cleanData(){
    const form = [
        document.getElementById('clientDataForm'),
        document.getElementById('appointmentForm'),
        document.getElementById('addressDataForm')
    ];

    for(let i = 0 ; i != 3 ; i++) {
        if (form) {
            // Recorre todos los inputs dentro del formulario
            const inputs = form[i].querySelectorAll('input');
            inputs.forEach(input => {
                input.value = ''; // Setea el valor del input a un string vacío
            });
        }
    }
}
var SubmitValues = {};
var fiscalFormFlag = false;
//carga de ocntenido al recargar la pagina o abrir el modal
document.getElementById('pacient_content').style.display = 'flex';
document.getElementById('contenedor_pacient_load_content').style.background = '#74c8cc';

// carga de contenido para Paciente
document.getElementById('pacient_load_content').addEventListener('click', function() {
    // Borrar contenido para mostrar Paciente
    document.getElementById('address_content').style.display = 'none';
    document.getElementById('contenedor_address_load_content').style.background = 'none';
    document.getElementById('contenedor_address_load_content').style.color = '#000000';


    document.getElementById('pacient_content').style.display = 'flex';
    document.getElementById('contenedor_pacient_load_content').style.background = '#74c8cc';
    document.getElementById('contenedor_pacient_load_content').style.color = '#FFFFFF';
});

// Carga de contenido para el boton de Domicilio
document.getElementById('address_load_content').addEventListener('click', function() {
    // borrar contenido para mostrar Domicilio
    document.getElementById('pacient_content').style.display = 'none';
    document.getElementById('contenedor_pacient_load_content').style.background = 'none';
    document.getElementById('contenedor_pacient_load_content').style.color = '#000000';



    document.getElementById('contenedor_address_load_content').style.background = '#74c8cc';
    document.getElementById('address_content').style.display = 'flex';
    document.getElementById('contenedor_address_load_content').style.color = '#FFFFFF';
});

// Carga de contenido del boton de consulta






function getValues(id){
    let emptyV = 0;
    var form = document.getElementById(id);
    let formData = new FormData(form);
    formData.forEach((value, key) => {
        if(value != ""){
            SubmitValues[key] = value
        }else{
            emptyV++;
        }
    });

    if(emptyV != 0 ) {
        alert(emptyV + " Campos Vacios!");
        if(id  === 'clientDataForm'){
            firstFormCompleate = false;
        }
        else if(id  === 'addressDataForm'){
            secondForm = false;
        }
        else{
            thirdForm = false;
        }
    }
    else{
        if(id  === 'clientDataForm'){
            firstFormCompleate = true;
            document.getElementById('pacient_content').style.display = 'none';
            document.getElementById('contenedor_pacient_load_content').style.background = 'none';
            document.getElementById('contenedor_address_load_content').style.background = '#e5e7eb';
            document.getElementById('address_content').style.display = 'flex';
            document.getElementById('address_load_content').disabled = false; // button avalible
        }
        else if(id  === 'addressDataForm'){
            secondForm = true;
            //carga de contenido
            document.getElementById('address_content').style.display = 'none';
            document.getElementById('contenedor_address_load_content').style.background = 'none';
            document.getElementById('address_load_content').disable = true;
            document.getElementById('contenedor_appointment_load_content').style.background = '#e5e7eb';
            document.getElementById('appointment_content').style.display = 'flex';
            document.getElementById('appointment_load_content').disabled = false; // button avalible
        }
        else{
            thirdForm = true;
            //sendFormData();

        }
    }
}

