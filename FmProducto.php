<!DOCTYPE html>

<head>

    <title>PRODUCTOS</title>
</head>
<link rel="stylesheet" href="Producto.css">
<link rel="stylesheet" href="bootstrap-5.3.0-dist\css\bootstrap.min.css">

<body>
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
    <div class="container-text">
        <div class="Title">
            Agregar Productos
        </div>
        <div class="user-details">

        </div>
        <form method="post" action="BdProducto.php" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Id Producto</span>
                    <input type="text" name="idProductos" placeholder="Ingrese el id del producto" required>
                </div>
                <div class="input-box">
                    <span class="details">Nombre del Producto</span>
                    <input type="text" name="Nombre_Producto" placeholder="Nombre Producto" required>
                </div>
                <div class="input-box">
                    <span class="details">Cantidad</span>
                    <input type="text" name="Cantidad" placeholder="Cantidad " required>
                </div>
                <div class="input-box">
                    <span class="details">Descripcion</span>
                    <input type="text" name="Descripcion" placeholder="Descripcion..." required>
                </div>
                <div class="input-box">
                    <span class="details">Precio</span>
                    <input type="text" name="Precio" placeholder="Precio" required>
                </div>
                <div class="input-box">
                    <span class="details">Categoria</span>
                    <select name="Categoria" id="Categoria">
                        <option value="Analgesico">Analgesicos</option>
                        <option value="Antiacidos">Antiácidos</option>
                        <option value="Antialergicos">Antialérgicos</option>
                        <option value="Antidiarreicos">Antidiarreicos</option>
                        <option value="Antiinfecciosos">Antiinfecciosos</option>
                        <option value="Antiinflamatorios">Antiinflamatorios</option>
                        <option value="Antipireticos">Antipiréticos</option>
                        <option value="Antitusivos ">Antitusivos </option>
                        <option value="Mucoliticos ">Mucolíticos </option>
                        <option value="Laxantes ">Laxantes </option>
                        <option value="Vitaminas ">Vitaminas </option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">IMAGEN</span>
                    <input class="form-control" type="file" name="Ob" id="formFileMultiple">
                </div>
                <div class="input-box">
                    <span class="details">FECHA</span>
                    <input type="date" name="Fecha">
                </div>
                <div class="Registrar">
                    <input type="submit" value="Registrar">
                </div>

            </div>
    </div>

    </form>
</body>

</html>