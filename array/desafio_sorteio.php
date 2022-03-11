<div class="titulo"><h3>Desafio Sorteio</h3></div>

<?php
$nomes = ["Naruto", "Choji", "Kiba", "Neji", "Shikamaru"];
$index = array_rand($nomes);// Essa função pega uma array aleatório.

echo "<h1><center>$nomes[$index]</center></h1>";