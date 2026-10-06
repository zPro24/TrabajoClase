<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operacion = $_POST['operacion'];

                function sumar($num1, $num2) {
                    return $num1 + $num2;
                }

                function restar($num1, $num2) {
                    return $num1 - $num2;
                }

                function multiplicar($num1, $num2) {
                    return $num1 * $num2;
                }

                function dividir($num1, $num2) {
                    if ($num2 != 0) {
                        return $num1 / $num2;
                    }
                    return "Error: División por cero";
                }

                switch ($operacion) {
                    case 'suma':
                        $resultado = sumar($num1, $num2);
                        break;
                    case 'resta':
                        $resultado = restar($num1, $num2);
                        break;
                    case 'multiplicacion':
                        $resultado = multiplicar($num1, $num2);
                        break;
                    case 'division':
                        $resultado = dividir($num1, $num2);
                        break;
                    default:
                        $resultado = "Operación no válida";
                }

                echo "El resultado de la operación es: " . $resultado;
            }
        ?>
    </h1>
</body>
</html>