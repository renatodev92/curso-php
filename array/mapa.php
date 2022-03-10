<div class="titulo"><h3>Mapa PHP</h3></div>

<?php 

$dados = array(
    "idade" => 25,
    "cor"   => "Vermelha",
    "peso"  => 75.9,
    "name" => "Etevaldo" 
);

print_r($dados);
echo "<br><hr>";

//Acessando os elementos de um array Map em JS.

echo "<h4>Acessando os elementos de um array Map em JS.</h4>";

echo  $dados["name"] . ' , você tem  '. $dados["idade"]. ' anos de idade.';
echo '<br>' . 'Gosta da cor '. $dados["cor"]. '.';
echo '<br>' . 'E pesa: ' . $dados["peso"] . "kg." ;

echo $_SERVER['HTTP_USER_AGENT']


?>