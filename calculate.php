<?php
$totalprice = 0;
$price = 0;
$numberproducts = 0;
function calculatePrice(&$totalprice, &$price, &$numberproducts) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ( isset($_POST['price']) && isset($_POST['numberproducts'])) {
        $price = $_POST['price'];
        $numberproducts = $_POST['numberproducts'];
        }
    }

    $iva = 0.21;
    $ivaprice = $iva * $price;
    $oneprice = $price - $ivaprice;
    $totalprice = $numberproducts * $oneprice;
    return $totalprice;
}

echo calculatePrice($totalprice, $price, $numberproducts);

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
    <h2 class="calculate_subtitle">Precio total: <?php echo $totalprice?> €</h2>
    <form method="post" action='calculate.php' class="calculate_form">
        <div class="calculate_container">
            <label class="calculate--label" for="money">Introduce cantidad a pagar: </label>
            <input class="calculate--input" type="number" name="money" id="money" required />
        </div>
        <input class="calculate--btn" type="submit" value="CALCULAR CANTIDAD A DEVOLVER" />
        </form>
    </div>
</body>
</html>