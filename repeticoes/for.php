<div class="titulo"><h3>Laço For</h3></div>

<?php

echo "<p>Trabalhando com o For em PHP. De várias formas!</p>";

for($cont = 1; $cont <= 5; $cont++) {
    echo "<p>$cont - For em Php 1(one) meu amigo hahah!</p>";
}


for(; $cont <= 10; $cont++) {
    echo "<p>$cont - For em Php 2(two) meu amigo hahah!</p>";
}



for(; $cont <= 15; ) {
    echo "<p>$cont - For em Php 3(three)meu amigo hahah!</p>";
    $cont++;
}

echo "<hr>";

echo "<p>Usando o FOR para percorrer o Array!</p>";

$week = [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta','Sábado'];

print_r($week);
echo "<br>";

for($i = 0; $i < count ($week); $i++) {
    echo "<p>{$week[$i]} - Vamos acordar, vamos acordar... 11/03/2021 ás 15:19h. </p>";
}

echo "<hr>";

echo "<p>Outras formas de percorrer o Array!</p>";

$matrix = [ 
    ['A.','E.','I.','O.','U.'], 
    ['B.', 'C.', 'D.']
];



for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j ++) {
        echo "Teste: {$matrix[$i][$j]} <br>";
    }
}