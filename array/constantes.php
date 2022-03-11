<div class="titulo"><h3>Arrays Constantes</h3></div>

<?php 

//No PHP não é possivel alterar os valores de uma constante.

const FRUTAS = array('Laranja', 'Abacaxi');

// FRUTAS[0] = "BANANA"; // Tentando adicionar banana no indíce 0. Não é possivel. 

// FRUTAS[] = "BANANA"; // Tentando adicionar banana no array de FRUTAS. Não é possivel. Pois trata-se de um 


echo FRUTAS[0] . '<br>';
echo FRUTAS[1];



const CARROS =['Fiat' => 'Uno','Ford' => 'Fiesta'];
echo '<br>';

echo '<br>' .CARROS['Fiat'];
echo '<br>' .CARROS['Ford'];
