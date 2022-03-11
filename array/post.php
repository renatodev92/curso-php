<div class="titulo"><h3>$_POST</h3></div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <input type="number" name="idade" placeholder="Idade">
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size 1.8rem;
    }

</style>

<?php

print_r($_POST);



