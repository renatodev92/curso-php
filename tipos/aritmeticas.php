<div class="titulo">Operações aritméticas PHP</div>

<?php

    echo 1 + 1, '<br>'; //Adição
    echo 2 - 1, '<br>'; // Subtração
    echo 10 * 5, '<br>';// Multiplicação 
    echo 7 / 4, '<br>';// Divisão

    echo intdiv(7,4), '<br>'; # Função retorna o resultado da divisão em um único número inteiro.

    echo round(7 / 4), '<br>'; #Função arredonda a divisão para os números

    echo 12 % 5, '<br><br>'; /* Resto da dividão. Exemplo: Tenho 12 balas e divido para 5 pessos então dou 2 balas pra cada e me sobra 2 como o resto (%) da divisão. 
    O módulo é bem utilizado na programação para saber se o número é par ou impar.*/

    echo '<p>O número descrito abaixo é classificado como par ou impar?</p>';
    /*Veja o exemplo de exercio abaixo para saber se o número é par ou impar.
    Dividindo o $number1 / 2 poderemos saber se o $number1 é par ou impar. */


    $number1 = 117;
    $par_impar = $number1 % 2;

    echo('O número ' . $number1) . ' é?', '<br>';

    if ($par_impar == 0) {
        echo 'Par!';
    } else {
        echo 'Impar!';
    }

    //Ordem de Precedência das operações.
    // () Parentes , ** Potenciação ou número elevador a quantidade de vezes, / divisão, * multiplicação, % resto da divisão, , + mais , - menos.

    echo '<p>Precedência</p>';
    echo 2 + 3 * 4,  '<br>'; # Resultado será 14
    echo (2 + 3) * 4, '<br>'; # Resultado será 20
    echo ((2 + 3) * 4) ** 2, '<br>'; # Resultado será 400? Log de cálculo. 1° 2 + 3 = 5. 2° 5 * 4 = 20. 3° 20 * 20 = 400 resultado final








?>