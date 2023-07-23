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

