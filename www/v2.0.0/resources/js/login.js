// import Swal from "sweetalert2";


function validateData(event) {
    event.preventDefault();

    const form = document.getElementById('record');
    const formElements = form.elements;

    for (let i = 0; i < formElements.length; i++) {
        if (!formElements[i].checkValidity()) {
        // Si algún campo no es válido, mostrar mensaje de error y salir de la función
            Swal.fire({
                icon: "error",
                title: "Datos Incorrectos",
                text: "Los datos ingresados estan mal!"
            });
        return;
        }
    }

    sendForm();
}

function sendForm() {
    const username = $('#username').val();
    const password = $('#your-password').val();
    const formData = {username, password};
    $.ajax({
        url: "../services/sing_in.php",
        type: "POST",
        data: formData,
        success: function(res) {
            const ans = JSON.parse(res);
            //console.log(ans);
            if(ans.success) {
                window.location = 'dashboard.php';
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

function notPass(){
    Swal.fire({
        icon: "info",
        title: "Olvidaste tu contraseña?",
        text: "Si no recuerdas tus claves de acceso, contacta a tu administrador para nuevos accesos."
    })
}