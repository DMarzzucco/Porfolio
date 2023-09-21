let menuVisible = false;
function mostraryocultarmenu (){
    if (menuVisible){
        document.getElementById("nav").classList="";
        menuVisible=false;
    }else{
        document.getElementById("nav").classList="responsive";
        menuVisible=true;
    }
}
function selecionar(){
    document.getElementById("nav").classList ="";
    menuVisible=false;
}
/*url */
function redireccionar(enlace) {
        window.location.href = enlace;
    }

// formulario
document.addEventListener("DOMContentLoaded", function() {
    var formularioLink = document.getElementById("formulario-link");
    var mensajeConfirmacion = document.getElementById("mensaje-confirmacion");

    formularioLink.addEventListener("click", function(event) {
        event.preventDefault();
        
        // Realizar la solicitud AJAX para enviar el formulario antes de mostrar el mensaje de confirmación
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "proceso-formulario.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {        
                mensajeConfirmacion.style.display = "block";
                
                // Redirigir al usuario después de un breve retraso (opcional)
                setTimeout(function() {
                    window.location.href = "index.html";
                }, 3000); // Redirige después de 3 segundos (3000 milisegundos)
            }
        };
        
        // Obtener los datos del formulario y enviar la solicitud
        var nombre = encodeURIComponent(document.querySelector('input[name="nombre"]').value);
        var telefono = encodeURIComponent(document.querySelector('input[name="telefono"]').value);
        var email = encodeURIComponent(document.querySelector('input[name="email"]').value);
        var contexto = encodeURIComponent(document.querySelector('input[name="contexto"]').value);
        var mensaje = encodeURIComponent(document.querySelector('textarea[name="mensaje"]').value);
        
        // Construir la cadena de datos para enviar
        var datos = "nombre=" + nombre + "&telefono=" + telefono + "&email=" + email + "&contexto=" + contexto + "&mensaje=" + mensaje;
        
        // Enviar la solicitud
        xhr.send(datos);
    });
});


