<div class="titulo">Variaveis</div>

<?php 

// PHP é uma linguagem de tipagem fraca!

echo "<h3>Trabalhando com variaveis em PHP!</h3>";

$numeroA = 13;
echo $numeroA, '<br>';
echo var_dump($numeroA) . '<br>';

$a = "Armazenado dados de uma string na variavel 'a'.";
echo $a, '<br>';

$number1 = 10;
$number2 = 15;
$resultado = $number1 + $number2;
$msg = "O resultado da soma ente {$number1} e {$number2} é {$resultado}.";

echo '<br>';
echo "A variavel criada chamada 'msg' <br> exibe o seguinte resultado." .$msg;
echo '<br>';

echo isset($resultado); // Exibe 1 como verdadeiro porque ela possuiu dados.
echo '<br>';

var_dump($resultado);
echo '<br>';

$variavel = 20;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

//Nomes de variavel
//Uma variavel PHP é criado com o o $ antes do nome dado a variavel
//Veja algumas formas válidas de escrever $variaveis em PHP.

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
//$4var = 'ivalido';










?>
