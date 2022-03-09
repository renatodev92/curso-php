<div class="titulo"><h3>Constantes em PHP</h3></div>

<?php 

// Uma vez que a constante foi definida, ela não poderá ser alterada no algoritmo.

//Veja abaixo os exemplos de como definimos uma função em PHP.

define("TAXA_DE_JUROS", 5.9); // Definindo uma constate em PHP.
echo 'A taxa de juros atual é '. TAXA_DE_JUROS . '%.' . ' Ano: '. date('Y');

echo "<br>";
const NOVA_TAXA = 6.175; // Definindo uma constante em PHP.
echo 'A partir de 2024 a nova taxa de juros será: ' . NOVA_TAXA . '%.';
echo "<br>";

const TAXA_MENSAL_CDB = 2.8 + 1.2;
echo 'A nova taxa mensal do CDB é: ' . TAXA_MENSAL_CDB . '%.';
echo "<br>";

echo '<br> A constante "PHP_VERSION" exibe o número da versão que está sendo utilizada no projeto. ' . PHP_VERSION . '.';


echo '<br> A constante  "PHP_INT_MAX" exibe a quantidade de números inteiros maxímos no PHP. ' . PHP_INT_MAX . '.';

echo '<br> A constante  "__LINE__" exibe a linha do projeto: ' . __LINE__;
echo '<br> A constante "__DIR__" exibe o diretorio do projeto: ' . __DIR__;

echo '<br> A constante "__FILE__" exibe o diretório do arquivo que está sendo executado' . __FILE__;



?>