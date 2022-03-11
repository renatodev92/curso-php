<div class="titulo"><h3>Foreach</h3></div>


<?php 

echo '<p>1 - Trabalhando com Foreach em PHP!</p>';

$week = [ 1 =>'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta','Sábado'];

foreach($week as $valor) {
    echo "$valor <br>";
}



foreach($week as $indice => $valor) {
    echo "$indice =>  $valor <br>";
}

echo "<hr>";

echo '<p>2 - Trabalhando com Foreach em PHP!</p>';

$matrix = [ 
    ['A.','E.','I.','O.','U.'], 
    ['B.', 'C.', 'D.']
];

foreach($matrix as $linha) {
    echo "$linha <br>";

    foreach($linha as $valor) {
        echo "$valor <br>";  
    }
}

echo "<hr>";

echo '<p>3 - Trabalhando com Foreach em PHP!</p>';
$numeros = [2,4,6,8,10,12];
foreach($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numeros);