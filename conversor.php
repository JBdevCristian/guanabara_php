<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de dolar</title>
</head>
    <body>

    <h1>Quanto você tem na carteira?</h1>
    <form method="post">
        <input type="number" name="numero"placeholder="Digite">
        <button type="submit">Enviar</button>
    </form>

    <div>
        <?php 
            if(isset($_POST["numero"])) {
                $numero = $_POST["numero"] / 5.69;
                $resultado = round($numero, 2);

                echo "O valor do dolar está em U$ 5.69 <BR>";
                echo "Você possui $resultado US";

            }
        ?>
    </div>

    </body>
</html>