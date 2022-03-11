<div class="titulo"><h3>GET in PHP</h3></div>

<?php 

// A requisição GET é uma array e ela trabalha com chave e valor. Passando os dados na URL.
print_r($_GET);
echo "<br>{$_GET['nome']}";


