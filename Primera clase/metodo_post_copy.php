<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="metodo_post_copy.php" method="post">
    Nombre:<input type="text" name="nombre"/>
        <br>
        Fecha: <input type="date" name="fecha"/>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <h2>La informacion enviada es: </h2>
    <?php
        print_r($_POST);
    ?>
    </form>
    
</body>
</html>