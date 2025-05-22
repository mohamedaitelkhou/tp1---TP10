<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];
$result = 0;

switch($operation) {
    case 'add':
        $result = $num1 + $num2;
        break;
    case 'subtract':
        $result = $num1 - $num2;
        break;
    case 'multiply':
        $result = $num1 * $num2;
        break;
    case 'divide':
        $result = ($num2 != 0) ? $num1 / $num2 : "adme pas division pare 0";
        break;
}

echo "<h1>Résultats du calcule est: $result</h1>";
echo "<a href='calulur.html'> Reutore  </a>";
?>