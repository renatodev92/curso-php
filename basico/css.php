<div class="titulo">Intregração CSS</div>

<h1 center>
<?php
    echo 'Olá ';
    echo '<small>';
    echo 'Mundo!'; 
    echo '</small>';
?>
</h1>

<?= "<div center azul> Outa forma de se expressar em PHP. </div>"?>
<br>

<div center><button dobro><?= "Legal" ?></button></div>

<style>
    button {
        padding: 10px <?= 2 * 10?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: <?= 10 - 8 ?>rem;
    }


</style>

