<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-4">
        <form action="">
            <div class="d-flex justify-content-around flex-wrap">
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Cuadrado</h5>
                        <input type="radio" value="cuadrado" name="figura" id="cuadrado">
                        <div class="image-container">
                            <img src="./img/cuadrado.png" alt="Cuadrado" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="card text-center" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Triángulo</h5>
                        <input type="radio" value="triangulo" name="figura" id="triangulo">
                        <div class="image-container">
                            <img src="./img/triangulo.png" alt="Triángulo" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="card text-center" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Rectángulo</h5>
                        <input type="radio" value="rectangulo" name="figura" id="rectangulo">
                        <div class="image-container">
                            <img src="./img/rectangulo.png" alt="Rectángulo" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="card text-center" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Círculo</h5>
                        <input type="radio" value="circulo" name="figura" id="circulo">
                        <div class="image-container">
                            <img src="./img/circulo.png" alt="Círculo" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
