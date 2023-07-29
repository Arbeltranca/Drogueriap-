<!DOCTYPE html>
<html lang="en">

<head>

    <title>PRODUCTOS</title>
</head>

<body>
    <?php

    $conectar = mysqli_connect("localhost:3306", "root","", "primedrogsend") or die ("Problemas de conexión en la BD");
    echo "Esta conectado a la base de datos primedrogs con usuario root y contraseña en blanco";

    $nombre=$_POST['idProductos'];
    $imagen=addslashes(file_get_contents($_FILES['Ob']['tmp_name']));

    mysqli_query($conectar, "insert into Productos (idProductos, Nombre_Producto,Cantidad,Descripcion,Precio,Categoria,Imagen,Fecha) values 
    ('{$_REQUEST['idProductos']}','{$_REQUEST['Nombre_Producto']}','{$_REQUEST['Cantidad']}','{$_REQUEST['Descripcion']}','{$_REQUEST['Precio']}','{$_REQUEST['Categoria']}','$imagen','{$_REQUEST['Fecha']}')")
     or die("Hay problemas en el select" . mysqli_error($conectar));
    mysqli_close($conectar);

    echo "El producto ha sido ingresado con éxito";
    ?>
</body>

</html>