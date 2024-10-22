<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .resultado {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<h1>Cálculo de Salário</h1>

    <?php 
    // Definindo a variável salario com um valor padrão de 0 se não estiver definido
    $salario = isset($_POST["salario"]) ? (float) $_POST["salario"] : 0;

    $resultado = ''; // Variável para armazenar a mensagem de resultado

    // Verificando se o salário foi informado e é maior que zero
    if ($salario > 0) {
        $quantos = floor($salario / 1412); // Arredonda para baixo quantas vezes 1412 cabe no salário
        $restante = $salario - ($quantos * 1412); // Calcula o restante do salário

        // Formatando a mensagem de resultado
        $resultado = "Com um salário de R$ " . number_format($salario, 2, ',', '.') . ", você pode pagar $quantos salários mínimos e sobra R$ " . number_format($restante, 2, ',', '.') . ".";
    }
    ?>

<!-- Formulário com names para os inputs -->
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label for="salario">Salário</label>
    <input type="number" name="salario" id="salario" placeholder="Digite seu salário" value="<?= number_format($salario, 2, ',', '.') ?>" required>
    
    <input type="submit" value="Enviar">
</form>

<?php if ($resultado): ?>
    <div class="resultado"><?= $resultado ?></div>
<?php endif; ?>

</body>
</html>
