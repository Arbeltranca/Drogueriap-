<!DOCTYPE html>

<head>

    <title>Detalles De Factura Salida</title>
</head>

<body>
    <link rel="stylesheet" href="facturasalida.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-dist\css\bootstrap.min.css">
    <header class="header">
        <header class="header">
            <div class="container">
                <div class="btn-menu">
                    <label for="btn-menu"> = </label>
                </div>
                <div class="logo">
                    <h1>Prime Drogs</h1>
                </div>
                <nav class="menu">
                    <a href="FMUsuario.php"> Salir </a>
                    <a href="#"> Usuario </a>

            </div>
        </header>


        <div class="capa"></div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="FmProducto.php">AGREGAR PRODUCTO</a>
                    <a href="VerProductos.php">INVENTARIO</a>
                    <a href="facturasalida.php">FACTURA SALIDA</a>
                    <a href="Registro_Entrada.php">REGISTROS ENTRADA</a>
                </nav>

                <label for="btn-menu">x</label>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container-text">
            <div class="Title">
                <h1>Detalles De Factura Salida</h1>
            </div>

            <form method="post" action="facturasalidas.php">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Id Factura Salida</span>
                        <input type="text" name="idFactura_Salida" placeholder="Ingrese el id de la factura" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Id Cliente</span>
                        <input type="text" name="idClientes" placeholder="Ingrese el id Cliente" required>
                    </div>
                    <div class="input-box">
                        <span class="details">FECHA</span>
                        <input type="date" name="Fecha">
                    </div>
                    <div class="input-box">
                        <span class="details">ID Producto</span>
                        <input type="text" name="idProducto" placeholder="Ingrese el id Producto" required>
                    </div>
                    <div class="input-box">
                        <span class="details">TOTAL</span>
                        <input type="text" name="Total" placeholder="Total" required>
                    </div>
                    
                    <input type="submit" value="Guardar Factura"><br>

                </div>
            </form>

            <form method="post" action="">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">ID PRODUCTO</span>
                        <input type="text" name="idProducto" placeholder="Ingrese el id Producto" required>
                    </div>
                    <?php
                    require "Conexion.php";
                    $bs = "SELECT * FROM Productos
                   WHERE Productos.idProductos = '{$_REQUEST['idProducto']}';";
                    $ShowData = mysqli_query($con, $bs);
                    while ($mos = mysqli_fetch_array($ShowData)) {
                        echo "<p>Nombre Producto: <input type='text' name='Nombre_Producto' value= '{$mos['Nombre_Producto']}' </p>";
                        echo "<p>Precio: <input type='text' name='Precio' value= '{$mos['Precio']}' </p>";
                        echo "<p>Cantidad del Producto: <input type='text' name='Cantidad' value= '{$mos['Cantidad']}' </p>";


                    }
                    ?>

                    <div class="input-box">
                        <span class="details">ID Cliente</span>
                        <input type="text" name="idClientes"  placeholder="Ingrese el id Cliente" required>
                    </div>

                    <?php
                    require "Conexion.php";
                    $base = "SELECT * FROM Clientes
                    WHERE Clientes.idClientes = '{$_REQUEST['idClientes']}';";
                    $ShowDat = mysqli_query($con, $base);
                    while ($most = mysqli_fetch_array($ShowDat)) {
                        echo "<p>Nombre Cliente: <input type='text' name='Nombre_Completo' value= '{$most['Nombre_Completo']}' </p>";
                        echo "<p>Telefono: <input type='text' name='Telefono' value= '{$most['Telefono']}' </p>";


                    }
                    ?>
                    <input type="submit" value="Buscar "><br>

                </div>
            </form>


        </div>


</body>

</html>
</body>

</html>