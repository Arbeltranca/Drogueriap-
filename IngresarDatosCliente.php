<?php

require "interfaz4.php";
require "interfaz5.html";


$cn = "SELECT * FROM Clientes
                    WHERE Clientes.idClientes = '{$_REQUEST['idClientes']}';";
                    $ShowDat = mysqli_query($conexion, $cn);
                    while ($ex = mysqli_fetch_array($ShowDat)) {
                        echo "<p>Nombre Cliente: <input type='text' id='Nombre' value= '{$ex['Nombre_Completo']}' </p>";
                        echo "<p>Direccion: <input type='text' id='direccion' value= '{$ex['Telefono']}' </p>";
                    }
?>