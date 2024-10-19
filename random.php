<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Número Aleatório</title>
</head>
<body>

<h1>Gerando um número aleatório</h1>
<p>Gerando um número entre 0 e 100</p>

<?php 
    $numeroAleatorio = null;

    if (isset($_POST['gerar'])) {
        function gerarNum() {
            $min = 1;
            $max = 100;
            return mt_rand($min, $max); // Retorna o número aleatório
        }

        $numeroAleatorio = gerarNum(); // Chama a função para gerar o número
    }

    if ($numeroAleatorio !== null) {
        echo "<p>O número aleatório é $numeroAleatorio</p>";
    }
?>

<form method="post">
    <button type="submit" name="gerar">Gerar</button>
</form>

</body>
</html>
