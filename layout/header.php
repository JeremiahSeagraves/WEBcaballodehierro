<header><!-- Defining the header section of the page -->
    <nav><!-- Defining the navigation menu -->
        <ul>
            <li class="selected"><a href="../index.php">Inicio</a></li>
            <li><a href="#">Favoritos</a></li>
            <li><a href="../productos/cat_balones.php">Todos los productos</a></li>
            <li><a href="../contacto/contacto.php">Contacto</a></li>
            <li><a href="../nosotros.php">Acerca de nosotros</a></li>

        <?php
        if(isset($_SESSION["admin"])){
            if($_SESSION["admin"]){
              echo "<li><a href = '../administrador/listar_usuarios.php' class='main'>Usuarios</a></li>&nbsp";
              echo "<li><a href = '../administrador/index.php' class='main'>Admon.</a></li>&nbsp";
              echo "<li><a href = '../administrador/listar_productos.php' class='main'>Lista Productos</a></li>&nbsp";
            }
          }
          if(isset($_SESSION["registrado"])){
            echo "<li><a href = '../carrito/misCompras.php' class='main'>Mis compras</a></li>";
            echo "<li><a href = '../carrito/carrito.php' class='main'>Carrito</a></li>";
          }
          ?>
            </ul>
    </nav>

      <!--  <section id="search">
            <form action="#" onsubmit="return false;" method="get">
                <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                <input type="submit" value="Search">
            </form> -->
</header>
