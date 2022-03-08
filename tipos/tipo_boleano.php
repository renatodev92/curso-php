<div class="titulo">Tipo Boleano</div>

<?php 

// PHP não é casesensitive.
// Possui dois valores boleanos true e false.
echo TRUE;
echo '<br>';
echo FALSE;
echo '<br>';

echo var_dump(true) . '<br>';
echo var_dump(FALSE). '<br>';
echo var_dump('FALSE'). '<br>';
echo is_bool(false). '<br>';

// Fazer as regras de conversões

echo '<p>Regras:</p>';
echo var_dump((bool) 0). '<br>'; // Em boleano apenas 0 zero é false. Os demais números são verdadeiros.
echo var_dump((bool) 20). '<br>'; // Em boleano apenas 0 zero é false. Os demais números são verdadeiros.
echo var_dump((bool) -8). '<br>'; // Em boleano apenas 0 zero é false. Os demais números são verdadeiros.
echo var_dump((bool) 0.000000001). '<br>'; // Em boleano apenas 0 zero é false. Os demais números são verdadeiros.
echo var_dump((bool) ''). '<br>'; // Uma string vazia também e tratada como false.
echo var_dump((bool) ""). '<br>'; // Uma string vazia também e tratada como false.
echo var_dump((float) 0). '<br>'; // Convertendo 0 para float
echo var_dump((string) 0). '<br>'; // Convertendo 0 para string
?>