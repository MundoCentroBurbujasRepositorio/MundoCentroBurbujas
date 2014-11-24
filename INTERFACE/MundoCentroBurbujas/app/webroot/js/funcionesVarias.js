var opcionmenuActual;

opcionmenuActual = "menInicio";

function validarMenu(id) {

    document.getElementById(opcionmenuActual).removeAttribute("class");
    document.getElementById(id).setAttribute("class", "active");

    opcionmenuActual = id;

}
