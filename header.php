<header><!-- Defining the header section of the page -->

    <nav><!-- Defining the navigation menu -->
        <ul>
            <li class="selected"><a href="#">Inicio</a></li>
            <li><a href="#">Favoritos</a></li>
            <li><a href="articulos.html">Todos los productos</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Acerca de nosotros</a></li>
        </ul>
    </nav>


    <div class="top_head"><!-- Defining the top head element -->
        <div class="logo"><!-- Defining the logo element -->
            <a href="index.html">
                <img src="images/logo.PNG" title="El caballo de hierro" alt="El caballo de gierro" width="920px" height="180px" />
            </a>
        </div>

        <section id="search"><!-- Search form -->
            <form action="#" onsubmit="return false;" method="get">
                <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                <input type="submit" value="Search">
            </form>

            <ul id="social"><!-- Social profiles links -->
                <li><a href="#" title="facebook" rel="external nofollow"><img alt="" src="images/facebook.png"></a></li>
                <li><a href="#" title="twitter" rel="external nofollow"><img alt="" src="images/twitter.png"></a></li>
                <li><a href="#" title="linkedin" rel="external nofollow"><img alt="" src="images/linkedin.png"></a></li>
                <li><a href="#" title="rss" rel="external nofollow"><img alt="" src="images/rss.png"></a></li>
            </ul>
        </section>
    </div>

    <section id="submenu"><!-- Defining the sub menu -->
        <ul>
            <li><a href="#">Categoría 1</a></li>
            <li><a href="#">Categoría 2</a></li>
            <li><a href="#">Categoría 3</a></li>
            <li><a href="#">Categoría 4</a></li>
            <li><a href="#">Categoría 5</a></li>
            <li><a href="#">Categoría 6</a></li>
        </ul>
    </section>

</header>
