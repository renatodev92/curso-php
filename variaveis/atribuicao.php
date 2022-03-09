<div class="titulo">Atribuições</div><br>

<?php 

$title = '<p>Atribuição de números em PHP!</p>';
echo $title;

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 1;//Recebe o própio número - 1.
echo '<br>' . $numero;

$numero = $numero + 2.5;//Recebe o própio número + 2.5 se tranformando em um float.
echo '<br>' . $numero;

$numero--;
echo '<br>' . $numero;//Podemos usar o -- para decrementar um valor. $numero = $numero - 1.

--$numero;
echo '<br>' . $numero;//Podemos usar o -- para decrementar um valor. $numero = $numero - 1.


$numero++;
echo '<br>' . $numero;//Podemos usar o ++ para incrementar um valor.$numero = $numero + 1.

++$numero;
echo '<br>' . $numero;//Podemos usar o ++ para incrementar um valor.$numero = $numero + 1.

$numero = 20;
echo '<br>' . $numero;//Agora a variavel número está recebendo o valor de 20.

$numero -= 5;
echo '<br>' . $numero;//Agora com o sinal -= está decrementando 20 - 5. Sendo o resultado final 15.

$numero = 100;
echo '<br>' . $numero;//Agora a variavel número está recebendo o valor de 100.

$numero += 5;
echo '<br>' . $numero;//Agora com o sinal += está incrementando 20 + 5. Sendo o resultado final 25.

$numero = 200;
echo '<br>' . $numero;//Agora a variavel número está recebendo o valor de 200.

$numero *= 10;
echo '<br>' . $numero;//Agora com o sinal *= está sendo multiplicado 200 * 10. Sendo o resultado final 2000.

$numero /= 10;
echo '<br>' . $numero;//Agora com o sinal /= está sendo dividido 2000 / 10. Sendo o resultado final 200.

$numero = 500;
echo '<br>' . $numero;//Agora a variavel número está recebendo o valor de 500..

$numero **= 2;
echo '<br>' . $numero;//Agora a variavel número no valor de 500 está sendo elevada a 2. 500 * 500 = 250.000

$numero = 40;
echo '<br>' . $numero;//Agora a variavel número está recebendo o valor de 500..

$numero .= 4;
echo '<br>' . $numero;//Agora a variavel número no valor de 40 está concatenando com o número 4. Sendo o resultado final 404.

//Trabalhando com atribuição de textos.

echo '<p>Trablhando com atribuição de textos em PHP.</p>';

$texto = "Esse é um texto";
echo '<br>' . $texto;

$texto = $texto . ' concatenando qualquer';
echo '<br>' . $texto;//Agora estamos concatenando um texto.

$texto .= " mais concatenação. Hoje e sempre!";
echo '<br>' . $texto;//Agora estamos concatenando um texto com .=



?>