<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
 * Suma dous valores.
 *
 * @param int $a Primeiro número
 * @param int $b Segundo número
 * @return int Suma dos dous valores
 */
    function sumar($a, $b) { return $a + $b; }

    $resultado = sumar(10,2);
    echo "<p>{$resultado}</p>"
    ?>

</body>
</html>