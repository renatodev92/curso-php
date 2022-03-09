<div class="titulo"><h3>Valor vs Referência</h3></div>

<?php 

$variavel = "Valor inicial";
echo $variavel;


//Atribuição por valor
$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = "Novo valor";
echo "<br> $variavelValor";
echo "<br> $variavel";

//Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = "Mesma referência";

echo "<br> $variavel";
echo "<br> $variavelReferencia";

?>