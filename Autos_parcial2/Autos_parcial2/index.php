<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron">
                <h1 class="display-4">Los Mejores Autos futuristas por salir!</h1>
                    <p class="lead">Los mejores autos de lujo mas veloces del mundo que todos quisieran tener.</p>
                    </div>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                    <img src="Imagenes/bugatti.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="Imagenes/ferrari.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Imagenes/tesla.jpg" class="d-block w-100" alt="...">
                        </div>
                    
                  </div>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; jeweler's
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
