<div class="titulo"><h3>Trabalhando com o Stwich</h3></div>

<?php 

$categoria = 'SUV';
$preco = 0.0;
$carro = "";

if($categoria === 'luxo') {
    $carro = "Mercedes";
    $preco = 250000;
} else if($categoria === 'SUV') {
    $carro = "Renegade";
    $preco = 80000;
} else if($categoria === 'Sedan') {
    $carro = "Etios";
    $preco = 55000;
} else {
    $carro = "Mobi";
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ",", ".");
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado.</p>";



// Trabalhanco com o switch

$name = "Rafael";
$age = 0;
$lastName = "";
$salario = 0.0;
$anime = "";



switch ($name) 
{
    case "Renato":
    $lastName = "Oliveira";
    $age = 29;
    $salario = 1250;
    $anime = "Naruto Shippuden";
    
    break; // Caso a condição for verdadeira ele vai sair do switch3

    case "Samuel":
        $lastName = "Neres";
        $age = 28;
        $salario = 2000;
        $anime = "Naruto Shippuden";
        $salarioBr = number_format($salario, 2, ",", ".");
        echo "$name $lastName<br> $age anos<br> Salario de R$ $salarioBr<br> Anime preferido: $anime.";
        break; // Caso a condição for verdadeira ele vai sair do switch3 
    
     case "Tiago":
        $lastName = "Maia";
        $age = 29;
        $salario = 3000;
        $anime = "Os Cavaleiros do Zodiaco";
        $salarioBr = number_format($salario, 2, ",", ".");
        echo "$name $lastName<br> $age anos<br> Salario de R$ $salarioBr<br> Anime preferido: $anime.";
        break; // Caso a condição for verdadeira ele vai sair do switch3
    
        case "Renan":
        $lastName = "Maia";
        $age = 27;
        $salario = 15000;
        $anime = "Dragon Ball Super";
        $salarioBr = number_format($salario, 2, ",", ".");
        echo "$name $lastName<br> $age anos<br> Salario de R$ $salarioBr<br> Anime preferido: $anime.";
        break; // Caso a condição for verdadeira ele vai sair do switch3
    
        
        case "Rafael": 
        $lastName = "Santos";
        $age = 30;
        $salario = 20000;
        $anime = "Dragon Ball Z";
        $salarioBr = number_format($salario, 2, ",", ".");
        echo "$name $lastName<br> $age anos<br> Salario de R$ $salarioBr<br> Anime preferido: $anime.";
        break; // Caso a condição for verdadeira ele vai sair do switch3

        case "Marcos":
        $lastName = "Reis";
        $age = 48;
        $salario = 4500;
        $anime = "Jaspion";
        $salarioBr = number_format($salario, 2, ",", ".");
        echo "$name $lastName<br> $age anos<br> Salario de R$ $salarioBr<br> Anime preferido: $anime.";
        break; // Caso a condição for verdadeira ele vai sair do switch3

        case "Luiz":
        $lastName = "Paulo";
        $age = 31;
        $salario = 3200;
        $anime = "Não gosta de animes, curte RBD";
        $salarioBr = number_format($salario, 2, ",", ".");
        echo "$name $lastName<br> $age anos<br> Salario de R$ $salarioBr<br> Anime preferido: $anime.";
        break; // Caso a condição for verdadeira ele vai sair do switch3


        default: // Defaut é usado caso umas das alternativas não for executada ele retorna uma mensagem!
        echo "Não encontramos o usúário no grupo ta de facção! <br> Verfique o nível de amizade!";
        break;
}

echo "<p>Projeto finalizado por Renato de Oliveira em 10/03/2022 ás 12:43h - Fecap - São Paulo/SP!</p>"



?>