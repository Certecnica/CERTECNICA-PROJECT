var idPreguntaEliminar;

function agregarTema() {
    modalTema = document.getElementById("modalTema");
    modalTema.style.display = "block";
}
// Cuando se hace click en Cerrar el modal de la noticia
function cerrarTema() {
    modalTema = document.getElementById("modalTema");
    modalTema.style.display = "none";
}
// Cuando se hace click en Cerrar el modal de la noticia
function cerrarEliminar() {
    modalPregunta = document.getElementById("modalPregunta");
    modalPregunta.style.display = "none";
}

function editarPregunta(idPregunta) {
    window.location.href = "editarpregunta.php?idPregunta=" + idPregunta;
}

function eliminarPregunta() {
    window.location.href = "eliminarpregunta.php?idPregunta=" + idPreguntaEliminar;;
}

function abrirModalEliminar(idPregunta) {
    idPreguntaEliminar = idPregunta;
    modalPregunta = document.getElementById("modalPregunta");
    modalPregunta.style.display = "block";
}

function paginaActiva(id) {
    var paginas = document.querySelectorAll(".icono");
    for (i = 0; i < paginas.length; i++) {
        paginas[i].className = "icono";
    }
    paginas[id].className = "icono selected";
}