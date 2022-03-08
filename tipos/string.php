<div class="titulo">Tipo String</div>

<?php 

echo 'Eu sou uma String!';
echo '<br>';
echo '<br>';

var_dump("Eu também"); #A função var_dump exibe o tipo de dado. E o tamanho. Ela conta até os acentos nos caso de string.
echo '<br>';

var_dump("Eu tambem"); ##A função var_dump exibe o tipo de dado. E o tamanho. Ela conta até os acentos nos caso de string.
echo '<br>';


// Concatenação


// A concatenação pode ser realizado através do (.) ponto em PHP

echo '<p>A concatenação pode ser realizado através do (.) ponto em PHP.</p>';
echo "Renato de Oliveira." . " 29 anos. " . "Brasileiro!";
echo '<br>';

// O comando echo aceita também a separação de várias strings por (,) virgula.

echo '<p>O comando ("echo") também aceita a separação de várias strings por (,) virgula.</p>';
echo "Larissa Tatiane," , " 23 anos, " , "Brasileira!";
echo '<br>';

echo '<br>';
echo "'teste (aspas simples)'" . '    E    "Teste(aspas duplas)"';


// Você também pode exibir resultados na tela usando a função print.

print"<br> Olá, eu fui chamado na função print do PHP!</br>";
print"<br> Olá, eu fui chamado na função print do PHP!</br>";
print"<br> Olá, eu fui chamado na função print do PHP!</br>";
print"<br> Olá, eu fui chamado na função print do PHP!</br>";

// Algumas funções

echo "<h3>Algumas funções PHP para Strings!</h3>";
echo '<br>' . strtoupper('Tranformando as letras em maisculas atráves da função <strong>strtoupper()</strong>.');
echo '<br>' .strtolower('TRANFORMANDO AS LETRAS EM MINUSCULAS ATRáVES DA FUNÇÃO <strong>STRTOLOWER()</strong>.');
echo '<br>' .ucfirst('transformando só a primeira letra da primeira palavra em maiuscula através da função <strong>ucfirst()</strong>.');
echo '<br>' .ucwords('transformando só a primeira letra de todas as palavras em maiuscula através da função <strong>ucwords()</strong>.');
echo '<br>' .strlen('Quantas Letras?'); //Conta quantas letras a srting possui.
echo '<br>' .mb_strlen("Eu também"); //Conta o tamanho da string sem os acentos.
echo '<br>' . substr('Só uma parte mesmo', 8, 5);//A partir do 8° caractere pega 5 posições para frente.
echo '<br>' . substr('Só uma parte mesmo', 8);//Caso não seja colocado o segundo parametro como o exemplo anterior, o valor será retornado a partir do 8° caractere até o final do texto.

echo '<br>' . str_replace('isso', 'por aquilo', 'Trocou isso.');//Função encontra uma palavra dentro de uma string e subistitui por outras palavras.








?>