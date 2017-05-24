// Get the window
var ventana;
var ventanaDetalleArticulo;
// When the user clicks anywhere outside of the window, close it

function ocultarModales(event){
  if (event.target == ventanaDetalleArticulo) {
    ocultarVentanaDetalleBoton();
  }else if (event.target == ventana) {
     ocultarVentanaLoginBoton();
  }
}


function mostrarVentanaDetalleArticulo(event){
var id_articulo = event.target.id;
var nombre_elemento = 'nombre'+id_articulo;
var imagen_elemento= 'figura'+id_articulo;
var precio_elemento = 'precio'+id_articulo;
var descripcion_elemento = 'descripcion'+id_articulo;
var proveedor_elemento = 'proveedor'+id_articulo;
var imagen = document.getElementById(imagen_elemento).innerHTML;
var nombre = document.getElementById(nombre_elemento).innerHTML;
var precio = document.getElementById(precio_elemento).innerHTML;
var descripcion = document.getElementById(descripcion_elemento).textContent;
var proveedor = document.getElementById(proveedor_elemento).textContent;
var botones = "<input type='button' id='compra' name='compra' value='Comprar')>"+
"<input type='button' id='cancelar' name='cancelar' value='Cancelar'>";

var cuerpo_articulo = "<div>"+nombre+"</div><div>"+imagen+"</div>"+precio+
"<div>"+descripcion+"</div><div>Proveedor: "+proveedor+"</div>";

document.getElementById("informacion").innerHTML = cuerpo_articulo + botones;
document.getElementById('cancelar').onclick=ocultarVentanaDetalleBoton;


ventanaDetalleArticulo.style.display = 'block';
}

function enviarAComprar(id){
  location.href="../carrito/articulosseleccionados.php?articulo="+id;
}

function mostrarVentanaLogin(event){
    ventana.style.display='block';
}

function ocultarVentanaLoginBoton(){
  ventana.style.display = 'none';
}

function ocultarVentanaDetalleBoton(){
  ventanaDetalleArticulo.style.display = 'none';
}

function asignarEventosBotones(){
  var botones = document.getElementsByName('vermas');
  for(var i=0;i<botones.length;i++){
    botones[i].onclick=mostrarVentanaDetalleArticulo;
  }
}

window.onload = function(){
  ventana = document.getElementById('caja_flotante_login');
  ventanaDetalleArticulo = document.getElementById('caja_flotante');
    secion_inicion_sesion= document.getElementById('inicio_sesion');
  if(  secion_inicion_sesion =! null){
    secion_inicion_sesion.onclick=mostrarVentanaLogin;
  }


  if(ventanaDetalleArticulo!=null){
    asignarEventosBotones();
  }

  window.onclick = ocultarModales;
}
