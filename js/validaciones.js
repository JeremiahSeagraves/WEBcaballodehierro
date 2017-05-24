

function validarFormularioRegistroUsuario (f){
	pass = f["contrasena"].value;
	pass2 = f["contrasena_valid"].value;
	if(pass != pass2){
		alert("Contraseñas no coinciden");
		return false;
	}else{
		return true;
	}
}