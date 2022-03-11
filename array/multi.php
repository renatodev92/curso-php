<div class="titulo"><h3>Array Multidimensionais</h3></div>

<?php 

echo "<p>Exibindo arrays multidimensionais</p>";
$dados = [
    [   
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ], 
    
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Santa Catarina"
    ],
];

var_dump($dados);
echo '<br>';
echo '<hr>';

echo "<p>Acessando os dados do array Multidimensional.</p>";

echo  $dados[0]['nome'];
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[0]['naturalidade'];
echo '<br>';

echo '<br>' . $dados[1]['nome'];
echo '<br>' . $dados[1]['idade'];
echo '<br>' . $dados[1]['naturalidade'];

echo "<p>Agora iremos adicionar um novo item a um array!</p>";

$dados [] = [
    "nome" => "Bernardo",
    "idade" => 30,
    "naturalidade" => "Duque de Caxias"
];

echo $dados[2]['nome'];
echo '<br>' . $dados[2]['idade'];
echo '<br>' . $dados[2]['naturalidade'];

echo "<p>Agora iremos adicionar uma nova chave e valor no indice 2 do nosso array $ dados.</p>";

$dados[2] ["estiloMusical"] = "Emo Core";

echo $dados[2]['nome'];
echo '<br>' . $dados[2]['idade'];
echo '<br>' . $dados[2]['naturalidade'];
echo '<br>' . $dados[2]['estiloMusical'];








