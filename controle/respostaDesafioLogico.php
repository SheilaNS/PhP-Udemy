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

if (isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1 && $t2) {
        $tv = "50'";
        $sorvete = true;
    } elseif ($t1 != $t2) {
        $tv = "32'";
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem tv dessa vez :(";
    }

    if (!$sorvete) {
        $resultado .= "<br>Estamos mais saudáveis!";
    } else {
        $resultado .= "<br>Vamos tomar sorvete \o/";
    }

    echo "<p>$resultado</p>";
}
?>