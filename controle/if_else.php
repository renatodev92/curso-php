<div class="titulo"><h3>If and Else in PHP.</h3></div>
<?php 

echo "<p> Trabalhando com IF and Else em PHP!";


//Verificando a idade do usúario e retornando uma mensagem.

$idade = 41;

if($idade < 18) {
    echo "<p>Infelizente você ainda é menor de idade!";
} if($idade >= 18 and $idade <=40) {
    echo "<p>Vejo que você é maior de idade my friend!";
} else{
    echo "<p> Você já passou dos 40 anos! Tome cuidade com a sua saúde.";
}

//Verificando o horário atual e retornando uma mensagem.

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

    


?>
