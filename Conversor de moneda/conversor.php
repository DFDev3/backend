<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moneda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Conversor de pesos colombianos COP</h1>
    <form action="conversor.php" method="POST">

    <fieldset id="fieldset_valor">
    <label for="fieldset_valor" id="valor">Valor inicial en COP: </label><input type="number" name="pesos" placehoder="Valor inicial en COP">
    </fieldset><br>
    <fieldset id="ops">
        <legend>Moneda resultante:</legend>
        <input type="radio" id="Dolares" name="monedas" value="Dolares"/>
        <label for="Dolares">Dolares</label><br>
        <input type="radio" id="Euros" name="monedas" value="Euros" />
        <label for="Euros">Euros</label><br>
        <input type="radio" id="Rupia" name="monedas" value="Rupias" />
        <label for="Rupia">Rupia India</label><br>
    </fieldset><br>

    <button type="submit">Convertir</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pesos = $_POST['pesos'];
            $moneda = $_POST['monedas'];

            switch ($moneda) {
                case 'Dolares':
                    $result = round($pesos / 4100,2);
                    $monedatxt = 'Dolares';
                    break;
                case 'Euros':
                    $result = round($pesos / 4466,2);
                    $monedatxt = 'Euros';
                    break;
                case 'Rupias':
                    $result = round($pesos / 49,2);
                    $monedatxt = 'Rupias';
                    break;
                default:
                    $result = 'Invalid operator';
            }

            echo "<p>Resultado: $result $monedatxt</p>";
    }
    ?>
    
</body>
</html>