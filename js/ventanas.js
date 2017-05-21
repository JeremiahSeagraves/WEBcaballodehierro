// Get the window
var ventana;
// When the user clicks anywhere outside of the window, close it
function ocultarModalClick(event) {
  if (event.target == ventana) {
    ocultarModalBoton();
  }
}

function mostrarModal(event){
var id_articulo = event.target.id;
var nombre_elemento = 'nombre'+id_articulo;
var imagen_elemento= 'figura'+id_articulo;
var precio_elemento = 'precio'+id_articulo;
var descripcion_elemento = 'descripcion'+id_articulo;
var proveedor_elemento = 'proveedor'+id_articulo;
var imagen = document.getElementById("imagen_elemento").innerHTML;
var nombre = document.getElementById('nombre_elemento').innerHTML;
var precio = document.getElementById('precio_articulo').innerHTML;
var descripcion = document.getElementById('precio_articulo').innerHTML;
var proveedor = document.getElementById('proveedor_articulo').innerHTML;
var cabecera_tabla = "<th><tr><td>"+nombre+"</td></tr></th>"
var cuerpo_tabla = "<tbody><tr><td>"+imagen+"</td></tr><tr><td>"+precio+
"</td></tr><tr><td>"+descripcion+"</td></tr><tr><td>Proveedor: "+proveedor+"</td></tr></tbody>"
document.getElementById("detalles_articulo").innerHTML = cabecera_tabla + cuerpo_tabla;
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
