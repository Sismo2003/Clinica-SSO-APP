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
            $('#MainContent').html('');
            console.error('Error al cargar el archivo:', error);
        }
    });


}