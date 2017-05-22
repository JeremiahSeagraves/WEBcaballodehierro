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
var imagen = document.getElementById(imagen_elemento).innerHTML;
var nombre = document.getElementById(nombre_elemento).innerHTML;
var precio = document.getElementById(precio_elemento).innerHTML;
var descripcion = document.getElementById(descripcion_elemento).innerHTML;
var proveedor = document.getElementById(proveedor_elemento).innerHTML;
var botones = "<input type='button' id='compra' name='compra' value='Comprar'> "+
"<input type='button' id='cancelar' name='cancelar' value='Cancelar'>"
var cuerpo_articulo = "<div>"+nombre+"</div><div>"+imagen+"</div>"+precio+
"<div>"+descripcion+"</div><div>Proveedor: "+proveedor+"</div>"
document.getElementById("informacion").innerHTML = cuerpo_articulo + botones;
document.getElementById('cancelar').onclick=ocultarModalBoton;
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
  ventana = document.getElementById('caja_flotante');
  window.onclick = ocultarModalClick;
  asignarEventosBotones();



}
