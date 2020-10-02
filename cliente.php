<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/signin/">

<title>Cliente</title>

<!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="https://getbootstrap.com/docs/3.4/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
    <img class="apple fadeInDown" src="img/apple.png" alt="apple_watch">
    <form class="form-signin" action="validar.php" method="POST">
        <p class="precio">$200.00 mxn</p>
            <h2 class="form-signin-heading">¿Cuántas piezas deseas comprar?</h2>
            <label for="inputEmail" class="sr-only">Piezas</label>
            <input type="text" class="form-control" name="pieza" placeholder="Cantidad" required autofocus>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresa</button>
    </form>
    <script src="https://getbootstrap.com/docs/3.4/assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
