var imagenes=new Array(
       'images/sport-balls.jpg',
       'images/sport-foot.jpg',
       'images/sport-racket.png',
       'images/sport-shirt.jpg'
   );

   /**
   * Funcion para cambiar la imagen
   */
   function rotarImagenes()
   {
       // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
       var index=Math.floor((Math.random()*imagenes.length));

       // cambiamos la imagen
       document.getElementById("imgpres").src=imagenes[index];
   }

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
  // Cargamos una imagen aleatoria
  rotarImagenes();

  // Indicamos que cada 5 segundos cambie la imagen
  setInterval(rotarImagenes,5000);

  ventana = document.getElementById('caja_flotante');
  window.onclick = ocultarModalClick;
  document.getElementById('inicio_sesion').onclick=mostrarModal;

}
