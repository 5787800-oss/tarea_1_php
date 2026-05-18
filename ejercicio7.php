<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if ($num1 > $num2) {
    echo "el numero mayor es :" . $num1;
    } elseif ($num2 > $num1) {
        echo "el numero mayor es :" . $num2;
        }

        ?>