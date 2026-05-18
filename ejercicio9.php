<?php
$num1 = $_POST['num1'];
$residuo = $num1 % 2;
if ($residuo == 0) {
    echo "El numero es par";
} else {
    echo "El numero es impar";
}
?>