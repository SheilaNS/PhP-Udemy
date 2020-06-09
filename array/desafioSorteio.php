<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$nomeAleatorio = array_rand($nomes); // pega um valor aleatório(random)
echo "<div center><h1>$nomes[$nomeAleatorio]</h1></div>"


?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>