<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo Comunicação</title>
</head>
    <body>
        <h1>Recebendo dados</h1>

        <?php 

            $n = $_POST["numero"];
            $pos = $n + 1;
            $antes = $n-1;


            echo "O numero que digitou é $n <br>";
            echo "O numero maior que esse é $pos <br>";
            echo "O numero menor que esse é $antes";

        ?>
    </body>
</html>