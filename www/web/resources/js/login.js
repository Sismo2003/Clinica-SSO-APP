

function validateData(event) {
    event.preventDefault();

    const form = document.getElementById('record');
    const formElements = form.elements;

    for (let i = 0; i < formElements.length; i++) {
        if (!formElements[i].checkValidity()) {
        // Si algún campo no es válido, mostrar mensaje de error y salir de la función
        alert('Por favor, complete todos los campos correctamente.');
        return;
        }
    }

    sendForm();
}

function sendForm() {
    const username = $('#username').val();
    const password = $('#password').val();
    const formData = {username, password};
    $.ajax({
        url: "services/sing_in.php",
        type: "POST",
        data: formData,
        success: function(res) {
            const ans = JSON.parse(res);
            console.log(ans);
            if(ans.success) {
                window.location = 'start.php';
            }else  {
                Swal.fire({
                    icon: "error",
                    title: "LOGIN DENEGADO!",
                    text: ans.message,
                });
            }
        },
        error: function(res) {
            const ans = JSON.parse(res);
            console.log(ans);
            Swal.fire({
                icon: "error",
                title: "ERROR 500 POR SERVIDOR",
                text: ans.message
            });
        }
    });
}
