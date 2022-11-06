<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos Lujosos </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM autos WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Auto</h1><hr>
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for=""> Marca:</label>
                        <input value="<?php echo $registro["Marca"]; ?>" type="text" class="form-control" name="Marca" placeholder="Teclea la Marca">
                    </div>

                    <div class="form-group">
                        <label for=""> Modelo:</label>
                        <input value="<?php echo $registro["Modelo"]; ?>" type="text" class="form-control" name="Modelo" placeholder="Teclea el Modelo">
                    </div>

                    <div class="form-group">
                    <label for=""> Año:</label>
                        <input value="<?php echo $registro["Año"]; ?>" type="text" class="form-control" name="Año" placeholder="Teclea el Año">
                    </div>

                    <div class="form-group">
                    <label for=""> Velocidad:</label>
                        <input value="<?php echo $registro["Velocidad"]; ?>" type="text" class="form-control" name="Velocidad" placeholder="Teclea la Velocidad">
                    </div>
    

                    <div class="form-group">
                    <label for=""> Rodado:</label>
                        <input value="<?php echo $registro["Rodado"]; ?>" type="text" class="form-control" name="Rodado" placeholder="Teclea el Rodado">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>