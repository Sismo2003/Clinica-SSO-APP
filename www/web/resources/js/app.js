//Funcion para cargar contenido en el contendor principal
var $ = require('jquery');
function loadContent(url){
    $.ajax({
        url: url, // Ruta del archivo a cargar
        type: 'GET', // Tipo de solicitud
        dataType: 'html', // Tipo de datos esperados
        success: function(data) {
            $('#MainContent').html(''); // Insertar el contenido en el div
            $('#MainContent').html(data); // Insertar el contenido en el div
        },
        error: function(xhr, status, error) {
            $('#MainContent').html(error);
            console.error('Error al cargar el archivo:', error);
        }
    });
}
// carga de pagina web, siempre cargamos el index de admin
document.addEventListener('DOMContentLoaded', function(){
    loadContent('pages/admin/dashboard/index.php');
})

function openModal(id) {
    document.getElementById('modal').classList.remove('hidden');
}
function closeModal(id) {
    document.getElementById('modal').classList.add('hidden');
}


function ToggleAll(id) {
    const element = document.getElementById(id);
    const plusIcon = document.getElementById(id + '-plus');
    const minusIcon = document.getElementById(id + '-minus');

    // Alternar la visibilidad del elemento principal
    element.classList.toggle('active');

    // Mostrar/ocultar los íconos según el estado de la clase 'active'
    if (element.classList.contains('active')) {
        element.style.display = 'flex';
        plusIcon.style.display = 'none';
        minusIcon.style.display = 'flex';
    } else {
        element.style.display = 'none';
        plusIcon.style.display = 'flex';
        minusIcon.style.display = 'none';
    }
}