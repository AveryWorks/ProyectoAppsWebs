<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Floristeria</title>
    <link rel="stylesheet" href="./css/Styles.css" />
    <link
      rel="shortcut icon"
      href="./images/favicon.png"
      type="images/x-icon"
    />
    <link
      rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
    />
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
      <h1 class="TnxText">Gracias por su compra!</h1>
    </main>
        
    <footer class="hero__down">
      <section class="Footer container">
        <div class="Networks__icons">
          <ul class="Social__networks">
            <li class="icons">
              <a href="#">
                <img src="./images/facebook.png" class="net__icon" />
              </a>
            </li>
            <li class="icons">
              <a href="#">
                <img src="./images/instagram.png" class="net__icon" />
              </a>
            </li>
            <li class="icons">
              <a href="#">
                <img src="./images/whatsapp.png" class="net__icon" />
              </a>
            </li>
          </ul>
        </div>
      </section>
    </footer>
  </body>
  <script >
  
  setTimeout(function () {
  window.location.href = 'store.php'; 
  }, 1000);</script>
</html>
