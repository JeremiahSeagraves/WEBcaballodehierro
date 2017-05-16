// Get the window
var ventana;
// When the user clicks anywhere outside of the window, close it
function ocultarModalClick(event) {
  if (event.target == ventana) {
    ocultarModal();
  }
}

function mostrarModal(){
  ventana.style.display = 'block';
}

function ocultarModalBoton(){
  ventana.style.display = 'none';
}

function asignarEventosBotones(){
  var botones = document.getElementsByName('informacion');
  for(var i=0;i<botones.length;i++){
    botones[i].onclick=mostrarModal;
  }
}

window.onload = function(){
  ventana = document.getElementById('articulo');
  window.onclick = ocultarModalClick;
  asignarEventosBotones();
  document.getElementById('cancelar').onclick=ocultarModalBoton;


}
