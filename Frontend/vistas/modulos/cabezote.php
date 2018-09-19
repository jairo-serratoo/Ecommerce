<!-- TOP -->
<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
            <!--  Modulo de redes sociales  -->
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social"> <!-- tamaños de columnas en diferentes dispositivos (grande, mediano, chico, movil) -->
                <ul>
                    <!--Facebook-->
                    <li>
                        <a href="http://facebook.com" target="_blank">
                            <i class="fa fa-facebook redSocial facebookBlanco" aria-hidden="true"></i> <!--este link se trae de la pagina -->
                        </a>
                    </li>
                    <!--Youtube-->
                    <li>
                        <a href="http://youtube.com" target="_blank">
                            <i class="fa fa-youtube redSocial youtubeColor" aria-hidden="true"></i> <!--este link se trae de la pagina -->
                        </a>
                    </li>
                    <!--Twetter-->
                    <li>
                        <a href="http://twitter.com" target="_blank">
                            <i class="fa fa-twitter redSocial twitterColor" aria-hidden="true"></i> <!--este link se trae de la pagina -->
                        </a>
                    </li>
                    <!--Google-->
                    <li>
                        <a href="http://google.com" target="_blank">
                            <i class="fa fa-google redSocial googleColor" aria-hidden="true"></i> <!--este link se trae de la pagina -->
                        </a>
                    </li>
                    <!--Instagram-->
                    <li>
                        <a href="http://instagram.com" target="_blank">
                            <i class="fa fa-instagram redSocial instagramColor" aria-hidden="true"></i> <!--este link se trae de la pagina -->
                        </a>
                    </li>
                </ul>
            </div>

            <!--Registro de Usuarios-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro"> 
                <ul>
                    <li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
                    <li>|</li>
                    <li><a href="#modalRegistro" data-toggle="modal">Crear una Cuenta</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>


<!-- HEADER -->
<header class="container-fluid">
    <div class="container">
        <div class="row" id="cabezote">
            <!--Logotipo-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
                <a href="#">
                    <img src="http://localhost/TiendaVirtual/Backend/vistas/img/plantilla/logo.png" class="img-responsive">
                </a>
            </div>

            <!--Categorias y Buscador-->
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <!--Boton categorias-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
                    <p>Categorias
                        <span class="pull-right">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                    </p>
                </div>

                <!--Buscador-->
                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
                    <input type="search" name="buscar" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <a href="#">
                            <button class="btn btn-default backColor" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </a>
                    </span>
                </div>
            </div>

            <!--Carrito de compras-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
                <a href="#">
                    <button class="btn btn-default pull-left backColor">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                </a>
                <p>TU CESTA
                    <span class="cantidadCesta">3</span>
                    <br> USD $
                    <span class="sumaCesta">50</span> 
                </p>
            </div>
        </div>

        <!--CATEGORIAS-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 backColor" id="categorias">
            <!--Categoria 1-->
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                <h4>
                    <a href="#" class="pixelCategorias">Categoria 1</a>
                </h4> 
                <hr>
                <!--Subcategorias-->
                <ul>
                    <li><a href="#" class="pixelSubCategorias">SubCat 1</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 2</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 3</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 4</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 5</a></li>
                </ul>
            </div>

            <!--Categoria 2-->
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                <h4>
                    <a href="#" class="pixelCategorias">Categoria 2</a>
                </h4> 
                <hr>
                <!--Subcategorias-->
                <ul>
                    <li><a href="#" class="pixelSubCategorias">SubCat 1</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 2</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 3</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 4</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 5</a></li>
                </ul>
            </div>

            <!--Categoria 3-->
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                <h4>
                    <a href="#" class="pixelCategorias">Categoria 3</a>
                </h4> 
                <hr>
                <!--Subcategorias-->
                <ul>
                    <li><a href="#" class="pixelSubCategorias">SubCat 1</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 2</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 3</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 4</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 5</a></li>
                </ul>
            </div>

            <!--Categoria 4-->
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                <h4>
                    <a href="#" class="pixelCategorias">Categoria 4</a>
                </h4> 
                <hr>
                <!--Subcategorias-->
                <ul>
                    <li><a href="#" class="pixelSubCategorias">SubCat 1</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 2</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 3</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 4</a></li>
                    <li><a href="#" class="pixelSubCategorias">SubCat 5</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
