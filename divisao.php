<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Divisão</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .bloco {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .calc, .calc2 {
            text-align: center;
            width: 100px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 10px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .calc2 {
            border-left: none; /* Remove a borda esquerda para não duplicar */
        }

        .p {
            border-bottom: 1px solid black;
        }

        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <?php 
        // Inicializa variáveis
        $dividendo = isset($_POST["dividendo"]) ? (int) $_POST["dividendo"] : 0;
        $divisor = isset($_POST["divisor"]) ? (int) $_POST["divisor"] : 0;
        $resultado = '';
        $calc = '';

        // Verifica se o divisor é zero
        if ($divisor === 0) {
            $resultado = 'Divisão por zero não é permitida!';
        } else {
            $calc = $dividendo / $divisor; // Calcula a divisão
            $resultado = $dividendo; // O resultado da multiplicação
        }
    ?>

    <!-- Formulário com names para os inputs -->
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" placeholder="Dividendo" value="<?= $dividendo ?>">

        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" placeholder="Divisor" value="<?= $divisor ?>">

        <input type="submit" value="Enviar">
    </form>

    <div>
        <h1>Estrutura da Divisão</h1>
        <div class="bloco">
            <div class="calc">
                <p><?= $dividendo ?></p>
                <p><?= $resultado !== 'Divisão por zero não é permitida!' ? $resultado : 'N/A' ?></p>
            </div>
            <div class="calc2">
                <p class="p"><?= $divisor ?></p>
                <p><?= $resultado !== 'Divisão por zero não é permitida!' ? number_format($calc, 2) : '' ?></p>
            </div>
        </div>

        <?php if ($resultado === 'Divisão por zero não é permitida!'): ?>
            <div class="error"><?= $resultado ?></div>
        <?php endif; ?>
    </div>

</body>
</html>
