<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos Lujosos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Auto</h1><hr>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">Marca:</label>
                        <input type="text" class="form-control" name="marca" placeholder="Teclea la marca">
                    </div>

                    <div class="form-group">
                        <label for="">Modelo:</label>
                        <input type="text" class="form-control" name="Modelo" placeholder="Teclea el modelo">
                    </div>

                    <div class="form-group">
                        <label for="">Año:</label>
                        <input type="text" class="form-control" name="año" placeholder="Teclea el año">
                    </div>

                    <div class="form-group">
                        <label for="">Velocidad:</label>
                        <input type="text" class="form-control" name="velocidad" placeholder="Teclea la velocidad">
                    </div>

                    <div class="form-group">
                        <label for="">Rodado:</label>
                        <input type="text" class="form-control" name="rodado" placeholder="Teclea el rodado">
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