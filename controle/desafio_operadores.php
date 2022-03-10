<div class="titulo"><h3>Desafio Operadores</h3></div>

<!-- 
    Dois trabalhos -> terça e quinta
    - Se os 2 forem feitos. Compra TV de 50 e toma sorvete.
    - Se somente 1 foi feito. Compra TV DE 32 e toma sorvete
    - Se nenhum dos 2 forem feitos. A familia não sairá de casa.
-->

<form action="#" method="post">
    <p>Dois trabalhos.<br>
    - Se os 2 forem feitos. Compra TV de 50 polegadas e toma sorvete.<br>
    - Se somente 1 foi feito. Compra TV DE 32 polegadas e toma sorvete<br>
    - Se nenhum dos 2 forem feitos. A familia não comprará a TV e não tomará sorvete.</p>

    <div>
        <label for="tbl1">O primeiro job deu certo?</label>
        <select name="tbl1" id="tbl1">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </div>

    <div>
        <label for="tbl2">O segundo job deu certo?</label>
        <select name="tbl2" id="tbl2">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </div>

    <button>Executar</button>


</form>

<style>
    button, select {
        font-size: 20px;
        margin: 10px 0;
    }
</style>

<?php 

$tbl1 = $_POST["tbl1"];
echo "<br>";
$tbl2 = $_POST["tbl2"];
echo "<br>";
$resultado = "";
if(isset($_POST['tbl1']) && isset($_POST['tbl2'])) {
if($tbl1 == "1" && $tbl2 == "1") {
    $resultado = "Deu super certo, vamos comprar a TV de 50 polegadas e tomar sorvete!";
} else if($tbl1 == "1" or $tbl2 == "1" ) {
    $resultado = "Deu certo, porém compraremos uma TV de 32 polegadas e depois vamos tomar sorvete!";
}
else if($tbl1 == "0" && $tbl2 == "0") {
    $resultado = "Sem TV e sem sorvete dessa vez :(.";
} else {
    $resultado = "";
}

echo "<p>$resultado</p>";

}



?>