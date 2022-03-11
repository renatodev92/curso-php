<div class="titulo"><h3>Operações PHP</h3></div>

<?php 

//Isso é um array.
$dados1 = [
    "nome" => "Renato de Oliveira",
    "idade" => 28
];


// Isso é outro array.
$dados2 = array (
    "naturalidade" => "Fortaleza",
    "estadoCivil" => "Casado"
);

$dadosCompletos = $dados1 + $dados2;
var_dump($dadosCompletos);

echo '<br>';
echo '<hr>';

echo "<p>Abaixo estamos acessando os dados de um array.</p>";

echo "Nome: {$dadosCompletos['nome']}";
echo '<br>';
echo "Idade: {$dadosCompletos['idade']}";
echo '<br>';
echo "Naturalidade: {$dadosCompletos['naturalidade']}";
echo '<br>';
echo "Estado Cicíl: {$dadosCompletos['estadoCivil']}";
echo '<br>';


echo "<p>Abaixo estamos acessando os dados de um array de outa forma.</p>";

echo "Nome: ${dadosCompletos['nome']}";
echo '<br>';
echo "Idade: ${dadosCompletos['idade']}";
echo '<br>';
echo "Naturalidade: ${dadosCompletos['naturalidade']}";
echo '<br>';
echo "Estado Cicíl: ${dadosCompletos['estadoCivil']}";
echo '<br>';
echo '<hr>';

echo "<p>Abaixo estamos removendo os elementos de um array!</p>";

unset($dadosCompletos['nome']);
echo "<br>";
echo "Veja que exibimos o array de dados completos e não temos mais o nome.<br>";
print_r($dadosCompletos);
echo '<hr>';

echo "<p>Criando um array de números impares e pares!</p>";

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = array_merge($pares, $impares); //Função array_merge junta o array.
echo '<br>';
print_r($decimais);

sort($decimais); //Sorte coloca os dos arrays impares e pares em ordem.
echo '<br>';
print_r($decimais);



