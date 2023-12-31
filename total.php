<?php
    $pricetotal = 0;
    function calculateTotal(&$pricetotal) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ( isset($_POST['money'])){
                $money = $_POST['money'];
                $pricetotal = $_POST['totalprice'];
                if ($money > $pricetotal) {
                    $total = $money - $pricetotal;
                    return "Cantidad a devolver: ".$total." €";
                }else if ($money < $pricetotal) {
                    $total = $pricetotal - $money;
                    return "Usted debe ".$total." €";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate product</title>
    <link rel="stylesheet" href="./calculate.css">
</head>
<body>
<div class="calculate">
    <div class="calculate_header">
        <a href="./product.php">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" style="fill: blue;">
                <path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z"/>
            </svg>
        </a>
    </div>
    <h1 class="calculate_title">Calcular precio:</h1>
    <h2 class="calculate_subtitle"><?php echo calculateTotal($pricetotal)?></h2>
    <a href="./product.php"><button class="calculate--btn">Volver a Home</button></a>
</div>
</body>
<script>