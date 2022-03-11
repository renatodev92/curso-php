<div class="titulo"><h3>Arrays</h3></div>

<?php 

//Trabalhando com arrays

$lista = array('Vermelho', 10, 100.50, 'final...');

echo "$lista <br>.";

var_dump($lista); // Exibindo o tipo de dados do array com var_dump.
echo "<br>";

print_r($lista); //Exibindo o array de forma para o entedimento humano.

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];

echo "<br>";
var_dump($lista[4]); //Veja que ao ser acessado o indíce 4 do array vai dar NULL. Pois quando ela foi setada não foi definido nenhum valor. 

$texto = "Esse é um texto de teste";
echo '<br>' . $texto[0];//Veja que através desse comando acessamos o  indice 0zero da variavel.
echo '<br>' . $texto[1];//Agora acesssamos o indíce 1um da variavel.
echo '<br>' . mb_substr($texto, 10, 5);//Com a função mb_substr já acessamos o indíce de uma variavel de um valor determidado a outro.
echo '<hr>';

//Alterando dados de uma array a partir do indíce

echo "<h3>Alterando dados de uma array a partir do indíce.</h3>";

echo "<p>Abaixo um array com alguns nomes de filmes.<p>";

$filmes = array("0 - As Vantagens de Ser Invisivel", "1 - Homens de Honra", "2 - O Preço do Amanhã", "3 - Homens de Honra", "4 - Pearl Habor");

echo '<br>' . $filmes[0];
echo '<br>' . $filmes[1];
echo '<br>' . $filmes[2];
echo '<br>' . $filmes[3];
echo '<br>' . $filmes[4];

echo "<p>Agora iremos alterar o indíce 0 - As vantagens de ser invisivel.<br>Para isso usaremos o comando $ filmes [0] = 'O Hobit uma jornada inesperada.' <p>";
$filmes[0] = "0 - O Hobit uma jornada inesperada.";

echo '<br>' . $filmes[0];
echo '<br>' . $filmes[1];
echo '<br>' . $filmes[2];
echo '<br>' . $filmes[3];
echo '<br>' . $filmes[4];
echo '<hr>';


// Novas formas de declaração de arrays

echo "<h3>Novas formas de declaração de arrays.</h3>";

echo "<p>A partir do PHP 5.4 do PHP passamos a utilizar o array da seguinte forma.<p>";

$frutas = ['0 - Laranja','1 - Pera','2 - Maça','3 - Melancia','4 - Banana'];
echo '<br>' . $frutas[0];
echo '<br>' . $frutas[1];
echo '<br>' . $frutas[2];
echo '<br>' . $frutas[3];
echo '<br>' . $frutas[4];
