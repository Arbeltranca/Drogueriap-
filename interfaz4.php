<?php

$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="primedrogsend";


$conexion = mysqli_connect ($host, $user, $password, $dbname, $port, $socket)
	or die ("Problemas con la conexión a la Base de Datos");

	if ($conexion->connect_errno){
		die("Conexión fallida". $conexion->connect_errno);
	}
	 else {
		echo "conexion exitosa";
		echo "<br>";
		echo "<hr>";
	 }

    mysqli_query($conexion, "INSERT INTO pagos (Numero_Tarjeta, Tipo_cuenta, Cuotas, CVV) values
        ('{$_REQUEST["Numero_Tarjeta"]}','{$_REQUEST["Tipo_cuenta"]}','{$_REQUEST["Cuotas"]}', '{$_REQUEST["CVV"]}") or die
        ("Hay problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "Los datos se ingresaron correctamente";
    header("location:IngresarDatosCliente.php");