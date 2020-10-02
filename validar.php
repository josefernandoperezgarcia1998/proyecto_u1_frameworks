<?php
echo "<link rel=stylesheet href=style.css>";
$pieza = $_POST['pieza'];
$costo_apple = 200;

$suma = $pieza * $costo_apple;

echo "<div>";
echo "<h2 class='titulo_pago'>Tu total a pagar es<h2>";
echo "<p class='totalPagar'>$ ".$suma." mxn</p>";
echo "</div>";
?>