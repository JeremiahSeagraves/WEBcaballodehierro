// Get the window
var ventana;
// When the user clicks anywhere outside of the window, close it
function ocultarModalClick(event) {
  if (event.target == ventana) {
    ocultarModal();
  }
}

function mostrarModal(event){
  var id_articulo = event.target.id;
  var nombre_celda = "articulo" + id_articulo;
  var celda = document.getElementById(nombre_celda);
  alert(celda.vermas);
  var seccion_informacion = document.getElementById('imagen_articulo');
  seccion_informacion.innerHTML+=celda.imagen;
  ventana.style.display = 'block';
}

function ocultarModalBoton(){
  ventana.style.display = 'none';
}

function asignarEventosBotones(){
  var botones = document.getElementsByName('vermas');
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
