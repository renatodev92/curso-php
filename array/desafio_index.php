<div class="titulo"><h3>Desafio Index</h3></div>

<?php 

$meses = array(
    1 => 'Janeiro', // 1=> Referência em PHP que o primeiro indíce será 1 e não 0 zero.
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
);

print_r($meses);

echo '<br>' . $meses[5];

?>