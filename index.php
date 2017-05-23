<!DOCTYPE html>
<html>
<head>
	<title>El caballo de hierro</title>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	 <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	 <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
  <!--   <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">-->

     <!-- Linking scripts -->


</head>

<body>
<div class="container">

	<?php
	 session_start();
	 if(!isset($_SESSION["registrado"])){
			 echo "<div id='header'>";
					 echo    "<div id='inicio_sesion' class='boton'>".
											 "Iniciar sesión".
									 "</div>";
					 echo "<div class='boton'>";
							 echo "<a href='cuenta_usuario/nuevo_usuario.php' title='Registrarse'>"."Registrarse"."</a>";
					 echo "</div>";
			 echo "</div>";
			 echo "<script src='js/efectos_index.js'></script>";
	 }else{
			 echo "<div id='header'>";
					 echo" <p id='saludo'>Hola " . $_SESSION["usuario"]."!</p>";
					 echo "<div class='boton'>";
							 echo "<a href='cuenta_usuario/editar_perfil.php' title='Editar Perfil'>"."Editar Perfil"."</a>";
					 echo "</div>";
					 echo "<div class='boton'>";
							 echo "<a href='cuenta_usuario/cerrar_sesion.php' title='Cerrar sesion'>"."Cerrar sesión"."</a>";
					 echo "</div>";
			 echo "</div>";
			 echo "<script src='js/cambiaimg.js'></script>";
	 }

?>

<header><!-- Defining the header section of the page -->
    <nav><!-- Defining the navigation menu -->
        <ul>
            <li class="selected"><a href="#">Inicio</a></li>
            <li><a href="#">Favoritos</a></li>
            <li><a href="productos/cat_balones.php">Todos los productos</a></li>
            <li><a href="contacto/contacto.php">Contacto</a></li>
            <li><a href="#">Acerca de nosotros</a></li>

        <?php
        if(isset($_SESSION["admin"])){
            if($_SESSION["admin"]){
              echo "<li><a href = 'administrador/lista_usuarios.php' class='main'>Usuarios</a></li>&nbsp";
              echo "<li><a href = 'administrador/index.php' class='main'>Admon.</a></li>&nbsp";
              echo "<li><a href = 'administrador/listar_productos.php' class='main'>Lista Productos</a></li>&nbsp";
            }
          }
          if(isset($_SESSION["registrado"])){
            echo "<li><a href = 'carrito/misCompras.php' class='main'>Mis compras</a></li>";
          }echo "<li><a href = 'carrito/carrito.php' class='main'>Carrito</a></li>";
          ?>
            </ul>
    </nav>

      <!--  <section id="search">
            <form action="#" onsubmit="return false;" method="get">
                <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                <input type="submit" value="Search">
            </form> -->
</header>

	<div class="top_head"><!-- Defining the top head element -->
			<div class="logo"><!-- Defining the logo element -->
					<a href="index.php">
							<img src="images/logo.PNG" title="El caballo de hierro" alt="El caballo de gierro" width="920px" height="180px" />
					</a>
			</div>
			<ul id="social"><!-- Social profiles links -->
				<li><a href="#" title="facebook" rel="external nofollow"><img alt="" src="images/facebook.png"></a></li>
				<li><a href="#" title="twitter" rel="external nofollow"><img alt="" src="images/twitter.png"></a></li>
				<li><a href="#" title="linkedin" rel="external nofollow"><img alt="" src="images/linkedin.png"></a></li>
				<li><a href="#" title="rss" rel="external nofollow"><img alt="" src="images/rss.png"></a></li>
			  </ul>
	</div>
	<section id="imgtxt"><!--Defining the main content section -->
		<img id="imgpres"src="" alt="" width="1000px" height="340px">
		<div>Bienvenido al Caballo de Hierro <br> ¡Tu tienda favorita de artículos deportivos!</div>
	</section>

	<!--se incluye el pie de la pagina -->
	<?php include 'layout/footer.php'; ?>

	<div id="caja_flotante" class="container">
	      <div class="modal">
	        <h1>Inicio de Sesi&oacuten</h1>
	           <form id="formulario" action="cuenta_usuario/inicio_sesion.php" method="post">
	             <div>
	               <label >Usuario</label>
	               <input type="text" name="usuario" value = ""/>
	             </div>
	             <div >
	               <label >Contrase&ntilde;a</label>
	               <input type="password" name="contrasena" value = ""/>
	             </div>
	             <div >
	               <input id="boton" name="enviar" type="submit" value="Enviar"/>
	             </div>
	           </form>
	      </div>
	</div>
</div>
</body>
</html>
