
function mostrarContrasena() {
  var divContrasena = document.getElementById("mostrar_contrasena");
  var divContrasena_vali = document.getElementById("mostrar_contrasena_vali");
  //confirmarCambioContrasena.innerHTML = "No";
  divContrasena.innerHTML = "<td><label for='contrasena'>Nueva Contraseña: </label></td>\n\
  <td><input type='password' name='contrasena' id='contrasena' required/></td>";

  divContrasena_vali.innerHTML = "<td><label for='contrasena_vali'>Repetir Nueva Contraseña: </label></td>\n\
  <td><input type='password' name='contrasena_vali' id='contrasena_vali' required/>\n\
    <span id='validar-contrasena'></span></td>";


}


window.onload = function (){
  document.getElementById('cambiar_contrasena').onclick = mostrarContrasena;
}
