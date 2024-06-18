<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        form {
            display: inline-block;
        }
        label, input {
            margin: 10px 0;
            display: block;
        }
        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .buttons button {
            margin: 5px;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <?php
    $respuesta = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $respuesta = '';

        if (is_numeric($num1) && is_numeric($num2)) {
            if ($operation == 'sumar') {
                $respuesta = $num1 + $num2;
            } elseif ($operation == 'restar') {
                $respuesta = $num1 - $num2;
            }
        } else {
            $respuesta = "Por favor, ingrese valores numéricos válidos.";
        }
    }
    ?>

    <div class="container">
        <h1>BIENVENIDO A LAS OPERACIONES</h1>
            <form action="operaciones.php" method="post">
                <label for="num1">Dato 1</label>
                <input type="text" id="num1" name="num1" required><br><br>
                <label for="num2">Dato 2</label>
                <input type="text" id="num2" name="num2" required><br><br>
                <button type="submit" name="operation" value="sumar">Sumar</button>
                <button type="submit" name="operation" value="restar" style="margin-left: 30px;">Restar</button>
                <br><br>
                <label for="respuesta">Respuesta: </label>
                <?php
                echo $respuesta
                ?>
            </form>
    </div>
 
</body>
</html>