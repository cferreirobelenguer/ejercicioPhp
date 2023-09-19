<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ( isset($_POST['price']) && isset($_POST['numberproducts'])) {
        $price = $_POST['price'];
        $numberproducts = $_POST['numberproducts'];
    }
}

print_r($price);
print_r($numberproducts);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate product</title>
</head>
<body>
    
</body>
</html>