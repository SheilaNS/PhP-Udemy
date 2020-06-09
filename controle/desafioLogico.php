<div class="titulo">Desafio Lógico</div>

<style>
    button, select {
        font-size: 1.9rem;
    }

</style>

<form action="#" method="post">
    <div>
        <label for="t1 ">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2 ">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>



<?php

echo $_POST['t1'];
echo $_POST['t2'];

$trabalhoTerca = $_POST['t1'];
$trabalhoQuinta = $_POST['t2'];

if ($trabalhoTerca && $trabalhoQuinta) {
    echo "<br>Vai tomar sorvete e vai comprar TV de 50'";
} elseif ($trabalhoTerca || $trabalhoQuinta) {
    echo "<br>Vai tomar sorvete e vai comprar TV de 32'";
} else {
    echo "<br>Não vai tomar sorvete e não vai comprar TV.";
    echo "<br>A família vai ficar mais saudável!";
}


?>