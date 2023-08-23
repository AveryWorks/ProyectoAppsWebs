<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Floristeria</title>
  <link rel="stylesheet" type="text/css" href="css/storestyle.css">
  <link rel="shortcut icon" href="./images/favicon.png" type="images/x-icon">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/estilo.css">
  <script src="javascript/app.js" async></script>

</head>
<body>
    <header class="hero">

        <nav class="nav container">
            <div class="logo__nav">
            <a href="./home.php">
                    <img src="images/favicon.png" class="logo__img" alt="Logo Floristeria">
                </a>
                <h2 class="title">Floristeria</h2>
            </div>

            <div class="buttons">
                <ul class="buttons__nav">
                    <li class="btn__nav" style="background-color: #d7e3fc;">
                        <a href="store.php" class="btn" style="color: #7ca3ff" >Tienda</a>
                    </li>
                    <li class="btn__nav">
                        <a href="nosotros.php" class="btn">Nosotros</a>
                    </li>
                    <li class="btn__nav">
                        <a href="contact.php" class="btn">Contacto</a>
                    </li>
                    
                </ul>
            </div>

        </nav>
    </header>
    
    <main>
        
        <section class="contenedor">
            <!-- Contenedor de elementos -->
            <div class="contenedor-items" id="contenedor-items">
                
            <div class="item">
                    <span class="titulo-item">Lavanda</span>
                    <img src="images/storeImages/lavanda.png" alt="" class="img-item">
                    <span class="precio-item">$15.000</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Rosa</span>
                    <img src="images/storeImages/rosa.png" alt="" class="img-item">
                    <span class="precio-item">$25.000</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Orquídea</span>
                    <img src="images/storeImages/orquidea.png" alt="" class="img-item">
                    <span class="precio-item">$35.000</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Suculenta</span>
                    <img src="images/storeImages/suculenta.jpg" alt="" class="img-item">
                    <span class="precio-item">$18.000</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Helecho</span>
                    <img src="images/storeImages/helecho.jpg" alt="" class="img-item">
                    <span class="precio-item">$32.000</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Bromelia</span>
                    <img src="images/storeImages/bromelia.jpg" alt="" class="img-item">
                    <span class="precio-item">$18.000</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Cactus</span>
                    <img src="images/storeImages/cactus.jpg" alt="" class="img-item">
                    <span class="precio-item">$54.000</span>
                    <button class="boton-item">Agregar al Carrito</button>
                    
                </div>
                <div class="item">
                    <span class="titulo-item">Tulipán</span>
                    <img src="images/storeImages/tulipan.jpg" alt="" class="img-item">
                    <span class="precio-item">$32.000</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Lirio</span>
                    <img src="images/storeImages/lirio.png" alt="" class="img-item">
                    <span class="precio-item">$42.800</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Begonia</span>
                    <img src="images/storeImages/begonia.png" alt="" class="img-item">
                    <span class="precio-item">$42.800</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Geranio</span>
                    <img src="images/storeImages/geranio.jpg" alt="" class="img-item">
                    <span class="precio-item">$42.800</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Hortensia</span>
                    <img src="images/storeImages/hortensia.jpg" alt="" class="img-item">
                    <span class="precio-item">$42.800</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>


            </div>
            <!-- Carrito de Compras -->
            <div class="carrito" id="carrito">
                <div class="header-carrito">
                    <h2>Tu Carrito</h2>
                </div>
    
                <div class="carrito-items">
                    <!-- 
                    <div class="carrito-item">
                        <img src="img/boxengasse.png" width="80px" alt="">
                        <div class="carrito-item-detalles">
                            <span class="carrito-item-titulo">Box Engasse</span>
                            <div class="selector-cantidad">
                                <i class="fa-solid fa-minus restar-cantidad"></i>
                                <input type="text" value="1" class="carrito-item-cantidad" disabled>
                                <i class="fa-solid fa-plus sumar-cantidad"></i>
                            </div>
                            <span class="carrito-item-precio">$15.000,00</span>
                        </div>
                       <span class="btn-eliminar">
                            <i class="fa-solid fa-trash"></i>
                       </span>
                    </div>
                    <div class="carrito-item">
                        <img src="img/skinglam.png" width="80px" alt="">
                        <div class="carrito-item-detalles">
                            <span class="carrito-item-titulo">Skin Glam</span>
                            <div class="selector-cantidad">
                                <i class="fa-solid fa-minus restar-cantidad"></i>
                                <input type="text" value="3" class="carrito-item-cantidad" disabled>
                                <i class="fa-solid fa-plus sumar-cantidad"></i>
                            </div>
                            <span class="carrito-item-precio">$18.000,00</span>
                        </div>
                       <button class="btn-eliminar">
                            <i class="fa-solid fa-trash"></i>
                       </button>
                    </div>
                     -->
                </div>
                <div class="carrito-total">
                    <div class="fila">
                        <strong>Tu Total</strong>
                        <span class="carrito-precio-total">
                            $120.000,00
                        </span>
                    </div>
                    <a href="pay_delivery.php"> <button class="btn-pagar"> Pagar <i class="fa-solid fa-bag-shopping"></i> </button></a> 
                </div>
            </div>

    
    </main>

<footer class="hero__down">

    <section class="Footer container">
        <div class="Networks__icons">
            <ul class="Social__networks">
                <li class="icons">
                    <a href="#">
                        <img src="./images/facebook.png" class="net__icon">
                    </a>
                </li>
                <li class="icons">
                    <a href="#">
                        <img src="./images/instagram.png" class="net__icon">
                    </a>
                </li>
                <li class="icons">
                    <a href="#">
                        <img src="./images/whatsapp.png" class="net__icon">
                    </a>
                </li>

            </ul>
        </div>

    </section>
    
</footer>

</body>
</html>