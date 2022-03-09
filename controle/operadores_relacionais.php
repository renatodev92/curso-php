<div class="titulo"><h3>Operadores Relacionais</h3></div>

<?php 

echo "<p>Operadores relacionais em PHP!</p>";


var_dump(1 == 1);// == TRUE 1 é igual a 1.
echo "<br>";

var_dump(1 > 1);// > FALSE 1 não é maior que 1.
echo "<br>";

var_dump(1 >= 1);// >= TRUE 1 é maior ou igual a 1
echo "<br>";

var_dump(4 < 23);// < TRUE 4 é maior que 23.
echo "<br>";

var_dump(1 <= 7);// <= TRUE 1 é menor ou igual a 7.
echo "<br>";

var_dump(8 <= 7);// <= FALSE 8 não é menor ou igual a 7.
echo "<br>";

var_dump(1 != 1);// != FALSE 1 não é diferente de 1.
echo "<br>";

var_dump(2 <> 1);// <> TRUE 2 é diferente de 1.
echo "<br>";

var_dump(123 === "123");// === FALSE 123 number não é o mesmo que 123 string. Tipos de dados diferentes.
echo "<br> <hr>";

echo "<p>Relacionais no IF/Else.</p>";
echo "<p>O problema abaixo verifica um valor de um convênio pet e retorna uma respota.</p>";

$valorConvenioPet = 120;

if($valorConvenioPet <= 100){
    echo "<p> Por o valor de $valorConvenioPet R$ o preco está bem em conta, Irei assinar o convênio!</p> ";
}else if ($valorConvenioPet > 150 ){
    echo "<p>Obrigado até aqui, estarei analisando a proposta.</p>";
} else {
    echo "<p> O valor que eu posso pagar inicialmente é R$ 100,00. Vamos conversar a respeito?</p>";
}
?>

<!--Inserindo cor aos paragrafos dessa pagina.-->
<style>
    p{
        color: #404040;
    }
</style>