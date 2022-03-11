<div class="titulo"><h3>Comparação Arrays</h3></div>

<?php

$ar1 = ['nome' => 'maria', 'idade' => 20];
$ar2 = ['nome' => 'maria', 'idade' => 20];

var_dump($ar1 == $ar2);
echo '<br>';

var_dump($ar1 == $ar2);
echo '<br>';

$ar3 = ['idade' => 20, 'nome' => 'maria'];

var_dump($ar1 == $ar3); //Igual
echo '<br>';

var_dump($ar1 === $ar3);//Idêntico
echo '<br>';

var_dump($ar1 != $ar3);//Diferente
echo '<br>';

var_dump($ar1 !== $ar3);//Não idêntico
echo '<br>';

echo '<hr>';

$ar4 = ['idade' => '20', 'nome' => 'maria'];

var_dump($ar1 == $ar4); //Igual
echo '<br>';

var_dump($ar1 === $ar4);//Idêntico
echo '<br>';

var_dump($ar1 != $ar4);//Diferente
echo '<br>';

var_dump($ar1 !== $ar4);//Não idêntico
echo '<br>';

