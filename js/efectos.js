// Get the window
var ventana;
// When the user clicks anywhere outside of the window, close it
function ocultarModalClick(event) {
  if (event.target == ventana) {
    ocultarModalBoton();
  }
}

function mostrarModal(){
ventana.style.display = 'block';
}

function ocultarModalBoton(){
  ventana.style.display = 'none';
}


window.onload = function(){
  ventana = document.getElementById('caja_flotante_login');
  window.onclick = ocultarModalClick;
  document.getElementById('inicio_sesion').onclick=mostrarModal;

}
