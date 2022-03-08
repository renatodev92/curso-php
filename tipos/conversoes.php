<div class="titulo"><h3>Conversões PHP</h3></div>

<?php 

echo is_int(PHP_INT_MAX);

// Int para float

echo '<p>Int para float</p>';

echo var_dump(PHP_INT_MAX + 1), '<br>';
echo var_dump((float) 3), '<br>';

// float para int

echo '<p>Float para int</p>';
echo var_dump((int) 6.8) . '<br>';//Convertendo números float em inteiro.
echo var_dump((int) 4.5) . '<br>';//Convertendo números float em inteiro.
echo var_dump((int) round(2.8));//Convertendo números float em inteiro.

// Operações com sring

echo '<p>Operações com Strings!</p>';

echo var_dump(3 + "2.5"), '<br>'; // Ve que o PHP reconhece a string 2.5 como um número. Assim ele tranforma o dado em um float ou int.

echo var_dump("3" + 3), '<br>'; // Ve que o PHP reconhece a string 3 como um número. Assim ele tranforma o dado em um float ou int.

echo var_dump(1 + "25"),'<br>';

echo var_dump(1 + "3.2"), '<br>';

echo is_string("3" . 2), '<br><br>';//Verifica se o tipo de dado é ou não é uma string.Retorna 1 como verdadeito porque houve concatenação.

print 'Olá viajante, estamos no ano de ' . date('Y') . '.' . "<br>";
print 'Esse código foi inscrito em 08/03/2022 ás 15:29 na FECAP, Liberdade-SP-Brasil. Acredito que as coisas mudaram...
Renato será que você ainda está programando?
Qual o seu destino?
Lampada para os meus pés, sua palavra é a luz para o meu caminho.
'







?>