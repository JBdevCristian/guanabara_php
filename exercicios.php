<?php 
    echo "<h1>Exercicio 1</h1>";
    echo "<p>Crie um script PHP que exiba a frase Olá, Mundo! na tela.</p>";

    echo "Resolução: Olá, Mundo! kkk";
    echo "<hr>";
?>

<?php 
    echo "<h1>Exercicio 2</h1>";
    echo "<p>Escreva um programa que defina duas variáveis com valores numéricos e realize as operações de adição, subtração, multiplicação e divisão entre elas, exibindo o resultado de cada operação.</p>";
    $num1 = 10;
    $num2 = 20;

    $adic = $num1 + $num2;
    $sub = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;

    echo "A Soma entre $num1 e $num2 é $adic <br>";
    echo "A Subtração entre $num1 e $num2 é $sub <br>";
    echo "A Multiplicação entre $num1 e $num2 é $mult <br>";
    echo "A Divisão entre $num1 e $num2 é $div <br>";
    echo "<hr>";
?>

<?php 
    echo "<h1>Exercicio 3</h1>";
    echo "<p>Crie um script PHP que recebe uma idade e verifica se a pessoa é maior de idade (18 anos ou mais) ou menor de idade, exibindo uma mensagem correspondente.</p>";
    $idade = 20;
    
    if($idade <= 18) {
        echo "Menor de idade";
    } else {
        echo "Maior de idade";
    }

    echo "<hr>";
?>

<?php 
    echo "<h1>Exercicio 4</h1>";
    echo "<p>Faça um programa que utilize um loop for para exibir os números de 1 a 10 na tela.</p>";
    
    for($i = 1; $i < 11; $i++) {
        echo "Você está no numero $i<br>";
    }

    echo "<hr>";
?>

<?php 
    echo "<h1>Exercicio 5</h1>";
    echo "<p>Crie um array com 5 frutas e utilize um loop foreach para exibir cada fruta na tela.</p>";
    
    $frutas = array("Uva", "banana", "Melancia", "Manga", "Laranja");

    foreach ($frutas as $x) {
        echo "$x <br>";
    }


    echo "<hr>";
?>

<?php 
    echo "<h1>Exercicio 6</h1>";
    echo "<p>Criar usuarios</p>";
    
    $users = array(
        array("ID" => 1, "Nome" => "Cristian", "Matricula" => 1234, "Salario" => 500),
        array("ID" => 2, "Nome" => "Giovanna", "Matricula" => 5678, "Salario" => 1000),
        array("ID" => 3, "Nome" => "Adagoberto", "Matricula" => 9101112, "Salario" => 2000),
    );

    foreach ($users as $user) {
    echo "ID: " . $user['ID'] . "<br>"; // Acesso correto ao array
    echo "Nome: " . $user['Nome'] . "<br>";
    echo "Matricula: " . $user['Matricula'] . "<br>";
    echo "Salario: " . $user['Salario'] . "<br>";
    echo "<br>"; // Linha em branco para separar os usuários
    }


    echo "<hr>";
?>

<?php 
    echo "<h1>Exercicio 7</h1>";
    echo "<p>Escreva uma função que receba um número e retorne se ele é par ou ímpar.</p>";
    
    function calc($num1, $num2) {
    $calculo = $num1 % $num2;

        if($calculo == 0) {
            echo "O numero é par";
        } else {
            echo "O numero é impar";
        }
    }

    calc(2, 3);

    echo "<hr>";
?>

<?php 
    echo "<h1>Exercicio 8</h1>";
    echo "<p>Crie um script que receba uma frase e conte quantas palavras essa frase possui.</p>";
    
    function palavras($palavra) {
        $contagem = strlen($palavra);
        echo 'A palavra que escreveu possui ' . $contagem . " caracteres";
    }

    palavras("Oi?");

    echo "<hr>";
?>



<?php 
    echo "<h1>Exercicio 9</h1>";
    echo "<p>Crie um formulário HTML que receba um nome e uma idade. Em seguida, crie um script PHP que exiba uma mensagem personalizada com o nome e a idade fornecidos, validando se a idade é um número.</p>";
    
    $nome = "";
    $idade = "";
    $resultado = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura os dados do formulário
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        // Verifica se a idade é numérica
        if (!is_numeric($idade)) {
            $idade = intval($idade); // Converte para inteiro, se não for numérico
            $resultado = "O valor era uma string e foi convertido para número.";

        } else {
            $resultado = "O valor já era um número.";
        }
    }

    echo "<hr>";
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="nome" placeholder="Informe o nome">
    <input type="text" name="idade" placeholder="Informe sua Idade">
    <input type="submit" value="Enviar">
</form>

<?php 
    echo "Seu nome é $nome e sua idade é $idade <br>";
    echo $resultado;
?>

<?php 
    echo "<h1>Exercicio 10</h1>";
    echo "<p>Crie uma classe Pessoa com as propriedades nome e idade. Adicione um método que exiba uma apresentação da pessoa (ex: Olá, meu nome é ... e eu tenho ... anos). Instancie um objeto da classe e exiba a apresentação.</p>";
    
    class Pessoa {
        public $nome = null;
        public $idade = null;

        public function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function apresentacao() {
            echo "Olá meu nome é {$this->nome} e eu tenho {$this->idade} anos" ;
        }
    }

    $cristian = new Pessoa("Cristian", 22);
    $cristian->apresentacao();

    echo "<hr>";
?>