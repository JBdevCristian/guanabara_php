<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
    <body>

        <?php 
        $num1 = isset($_GET["num1"]) ? (float) $_GET["num1"] : 0;
        $num2 = isset($_GET["num2"]) ? (float) $_GET["num2"] : 0;
        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num1">Numero 1</label>
            <input type="number" name="num1" value="<?= $num1 ?>">

            <label for="num2">Numero 2</label>
            <input type="number" name="num2" value="<?= $num2 ?>">

            <input type="submit" value="Enviar">
        </form>


        <h1>Resultado</h1>
        <?php 

        $resultado = $num1 + $num2;

            if($resultado == 0) {
                echo '';
            } else {
                echo "<p>O resultado de $num1 + $num2 é $resultado</p>";
            }
        ?>


    </body>
</html>