
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio producto</title>
    <link rel="stylesheet" href="./product.css">
</head>
<body>
    <div class="product">
        <h1 class="product_title">Calcular precio:</h1>
        <form method="post" action='calculate.php' class="product_form">
            <div class="product_container">
                <label class="product--label" for="price">Precio del artículo: </label>
                <input class="product--input" type="number" name="price" id="price" required />
            </div>
            <div class="product_container">
                <label class="product--label" for="numberproducts">Número de productos: </label>
                <input class="product--input" type="number" name="numberproducts" id="numberproducts" required/>
            </div>
            <input class="product--btn" type="submit" value="CALCULAR" />
        </form>
    </div>
</body>
</html>