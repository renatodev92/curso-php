<div class="titulo"><h3>Operadores Lógicos em PHP</h3><hr></div>

<?php 

echo "<p>Tabela da Verdade '!' (Negação Lógica).</p>";

var_dump(true); // TRUE 
echo "<br>";
var_dump(!true); // ! not Esse sinal tranforma o que é verdadeiro em falso. E o que é falso em verdadeiro.
echo "<br><hr>";

echo "<p>Tabela da Verdade 'And' (E)</p>";
//Todas as comparações tem que dar verdadeiro para retornar TRUE.Caso contrário retornará FALSE.

var_dump(true && true);// && - Retorna como verdadeiro pois os dois dados são verdadeiros. 
echo "<br>";

var_dump(true and true);//and - Retorna como verdadeiro pois os dois dados são verdadeiros 
echo "<br>";

var_dump(true && false);// && - Retorna como falso pois um dos dados é falso. 
echo "<br>";

var_dump(true and false);//and - Retorna como falso pois um dos dados é falso. 
echo "<br><hr>";

echo "<p>Tabela da Verdade 'OR' (OU)</p>";
//Pelo menos uma dar alternativas deve ser verdadeira para dar TRUE. Caso todas forem falsas, retornará FALSE.

var_dump(true || true);// ||
echo "<br>";

var_dump(true or true);//Or
echo "<br>";

var_dump(false or true);//Or
echo "<br>";

var_dump(false || false);// ||
echo "<br>";

var_dump(false or false);//Or
echo "<br><hr>";

echo "<p>Tabela da Verdade 'XOR' (OU Exclusivo)</p>";
//Caso todas as condições forem iguais o retorno será falso. Retorna verdadeiro se as instruções forem diferentes.
var_dump(true xor true);// xor = falso
echo "<br>";

var_dump(true xor false);// xor = verdadeiro
echo "<br>";

var_dump(false xor true);// xor = verdadeiro
echo "<br>";

var_dump(true xor true);// xor = falso
echo "<br><hr>";

echo "<p>Exemplo.</p>";

$idade = 60;
$sexo = "FEMININO";
$pagouPrevidencia = false;

$msg1 = "Você pode se aposentar porque você tem $idade anos e é do sexo $sexo.";

$msgF = "Você possui $idade anos de idade.<br>Para se aposentar com o sexo $sexo, você deve ter pelo menos 60 anos de idade.<br>Caso corresponda a idade, verifique se foi pago a previdência.";

$msgM = "Você possui $idade anos de idade.<br>Para se aposentar com o sexo $sexo, você deve ter pelo menos 65 anos de idade.<br>Caso corresponda a idade, verifique se foi pago a previdência.";

if($idade >= 60 && $sexo === 'FEMININO' && $pagouPrevidencia == true) {
    echo $msg1;
}else if($idade >= 65 && $sexo === 'MASCULINO') {
    echo $msg1;
}else {
    if($sexo === "MASCULINO" && $idade <65 && $pagouPrevidencia == true) {
        echo $msgM;
    } else {
        echo $msgF;
    }
}


?>

<style>
    p {
        font-weight: bold;
    }
</style>