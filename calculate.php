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

calculatePrice($totalprice, $price, $numberproducts);

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
    <form method="post" action='total.php' class="calculate_form">
        <input type="hidden" name="totalprice" value="<?php echo $totalprice; ?>">
        <div class="calculate_container">
            <label class="calculate--label" for="money">Introduce cantidad a pagar: </label>
            <input class="calculate--input" type="number" name="money" id="money" required />
        </div>
        <input class="calculate--btn" type="submit" value="CALCULAR CANTIDAD A DEVOLVER" />
    </form>
        <div id="error" style="color: red;"></div>
    </div>
</body>
<script>
    //form validation
    const validateForm = () => {
        const money = document.getElementById('money').value;
        const error = document.getElementById('error');

        if ( money <=0 ) {
            error.textContent = 'Los números no pueden ser negativos o igual a 0.';
            return false;
        } else {
            error.textContent = '';
            return true;
        }
    }
</script>
</html>