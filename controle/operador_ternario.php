<div class="titutlo"><h3>Operador Ternário</h3></div>

<?php 

$idade = 17;
$status;

if($idade >= 18) {
    $status = "Maior de Idade.";
} else {
    $status = "Menor de Idade.";
}

echo "$status<br>";

// Fazendo a mesma lógica assina com o valor ternário

$status = $idade >= 18 ? "Ele é maior de idade." : "Ele é menor de idade.";
echo "$status<br>";

// Outro exemplo com o operador ternário.

$temDiabete = false;
$resultado;

$resultado = $temDiabete ? "Essa pessoa é diabética!" : "Essa pessoa não tem diabete!";
echo "$resultado<br>";

//Mais um exemplo com operador ternário

$quantidadeDeGols = 10;
$artilheiro;

$artilheiro = $quantidadeDeGols >= 20 ? "Esse jogador é artilheiro dos bons!" : "Esse jogador não faz parte do quadro de artilheiros!";

echo "$artilheiro<br>";
?>