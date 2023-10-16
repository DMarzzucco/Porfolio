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

/** HERRAMIENTAS */
function openTab(tabName) {
    // Ocultar todas las pestañas
    var tabs = document.querySelectorAll('.tab');
    tabs.forEach(function(tab) {
        tab.classList.remove('active');
    });

    // Mostrar la pestaña seleccionada
    document.getElementById(tabName).classList.add('active');
}
