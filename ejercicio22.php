<?php
$dolares = $_POST['dolares']; 
$tasa_cambio = 0.86;
$euros = $dolares * $tasa_cambio;
echo "<h2>Resultado de la Conversión</h2>";
echo "La cantidad de $" . $dolares . " USD equivale a: €" . $euros . " EUR.";
?>