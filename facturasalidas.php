<!DOCTYPE html>


<head>

    <title>Detalles De Factura Salida</title>
</head>

<body>
    <?php



    $con = mysqli_connect("localhost:3306", "root", "", "primedrogsend") or die("Problemas de conexión en la BD");
    echo "Esta conectado a la base de datos primedrogs con usuario root y contraseña en blanco";

    mysqli_query($con, "INSERT INTO Factura_Salida (idFactura_Salida, idClientes, idProducto, Fecha, Total) values
        ('{$_REQUEST['idFactura_Salida']}','{$_REQUEST["idClientes"]}','{$_REQUEST["idProducto"]}', '{$_REQUEST["Fecha"]}','{$_REQUEST["Total"]}')") or die
        ("Hay problemas en el select" . mysqli_error($con));

    mysqli_close($con);

    echo "La factura de salida se registró con éxito";
    header("locate: facturasalida.php")

        ?>
</body>