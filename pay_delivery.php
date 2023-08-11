<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (ajusta los valores según tu configuración)
    $servername = "bl5kioqvakcwe5ondzsl-mysql.services.clever-cloud.com";
    $username = "uxedxshandegzmdk";
    $password = "ZaEy1j1xwsmA4Im2Q3gx";
    $dbname = "bl5kioqvakcwe5ondzsl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recupera los valores del formulario
    $nombreCompleto = $_POST["nombre-completo"];
    $correoElectronico = $_POST["correo-electronico"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion-delivery"];
    $metodoPago = $_POST["opcion"];

    // Inserta los datos en la tabla Venta
    $sql = "INSERT INTO Venta (nom_usuario, email_usuario, tel_usuario, delivery, pay_method) VALUES ('$nombreCompleto', '$correoElectronico', '$telefono', '$direccion', '$metodoPago')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery-Floristeria</title>
    <link rel="stylesheet" href="./css/Styles.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="images/x-icon">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    

</head>
<body>
    
    <header class="hero">

        <nav class="nav container">
            <div class="logo__nav">
                <a href="./home.html">
                    <img src="images/favicon.png" class="logo__img" alt="Logo Floristeria">
                </a>
                <h2 class="title">Floristeria</h2>
            </div>

            <div class="buttons">
                <ul class="buttons__nav">
                    <li class="btn__nav">
                        <a href="#" class="btn">Tienda</a>
                    </li>
                    <li class="btn__nav">
                        <a href="#" class="btn">Nosotros</a>
                    </li>
                    <li class="btn__nav">
                        <a href="#" class="btn">Contacto</a>
                    </li>
                    
                </ul>
            </div>

        </nav>
    </header>



    <section class="delivery">
        <form class="delivery-form" action="pay_delivery.php" method="POST">
            <h4>Datos personales</h4>
            <input class="controls-delivery" type="text" name="nombre-completo" placeholder="Nombre Completo">
            <input class="controls-delivery" type="email" name="correo-electronico" placeholder="Correo Electrónico">
            <input class="controls-delivery" type="tel" name="telefono" placeholder="Teléfono">
            
            <h4>Dirección de entrega</h4>
            <input class="controls-delivery" type="text" name="direccion-delivery" placeholder="Dirección exacta">
            
            <h4>Método de pago</h4>
            <label class="controls-delivery">
                <input type="radio" name="opcion" value="opcion1"> Sinpe   
            </label>
            <br><br>
            <label class="controls-delivery">
                <input type="radio" name="opcion" value="opcion2"> Tarjeta 
            </label>
            <br><br>
            <label class="controls-delivery">
                <input type="radio" name="opcion" value="opcion3"> Efectivo
            </label>
            <br><br>
            <input class="botons-delivery" type="submit" value="Realizar pedido">
        </form>
    </section>
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