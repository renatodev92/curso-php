<divi class="titulo"><h3>Desafio FOR</h3></divi>

<!--  
Desafios
1) - Fazer um for que apresente na tela. Pode usar incremento.
2) - Fazer um for que apresente na tela. Não pode usar o incremento.
#
##
###
####
#####
-->

<?php

$dados = ['#','##','###','####','#####'];

echo "<p>Resultado: Algoritimo realizado por mim!</p>";

for($i = 0; $i < count($dados); $i++) {
    echo "<p>1 ) - {$dados[$i]} - Acredito que deu certo...</p>";
}

echo "<hr>";

echo "<p>Resultado: Algoritimo realizado pelo professor!</p>";

$dados1 = "";
for($c = 0; $c <= 5; $c++) {
    $result .= '#';
    echo "<p>  2 ) - $result -Acredito que deu certo...</p>";
}

echo "<hr>";

echo "<p>Resultado: Algoritimo realizado pelo professor!</p>";

for($show = "#"; $show !== "######"; $show .= '#') {
    echo "<p> 3 ) - $show Deu certo...<br>";
}



