<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora en PHP</h1><br>

    <form action="calculadora.php" method="POST">

        <fieldset id="numbers">
           <label for="num1" id="title1">Primer Número:</label><input type="number" name="num1" placehoder="Número 1"><br>
           <label for="num2" id="title2">Segundo Número:</label><input type="number" name="num2" placehoder="Número 2">
        </fieldset><br>
        <fieldset id="ops">
            <legend>Operación:</legend>
            <input type="radio" id="Sumar" name="operacion" value="Sumar"/>
            <label for="Sumar">Sumar</label><br>
            <input type="radio" id="Restar" name="operacion" value="Restar" />
            <label for="Restar">Restar</label><br>
            <input type="radio" id="Multiplicar" name="operacion" value="Multiplicar" />
            <label for="Multiplicar">Multiplicar</label><br>
            <input type="radio" id="Dividir" name="operacion" value="Dividir" />
            <label for="Dividir">Dividir</label><br>
        </fieldset><br>

        <button type="submit">Calcular</button>
    </form>
    <?php
    print_r($_POST)?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operacion'];

            switch ($operator) {
                case 'Sumar':
                    $result = $num1 + $num2;
                    break;
                case 'Restar':
                    $result = $num1 - $num2;
                    break;
                case 'Multiplicar':
                    $result = $num1 * $num2;
                    break;
                case 'Dividir':
                    $result = $num1 / $num2;
                    break;
                default:
                    $result = 'Invalid operator';
            }

            echo "<p>Resultado: $result</p>";
    }
    ?>
</body>
</html>
