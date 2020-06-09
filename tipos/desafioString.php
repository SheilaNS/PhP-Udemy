<div class="titulo">Desafio String</div>

<?php

echo "Enunciado: <br>";
echo "Avaliando os métodos da documentação da String, <br>";
echo "qual o método que a posição do testo 'abc' <br>";
echo "na string '!AbcaBcabc' retorne 1? <br><br>";
echo 'Resposta: <br>';
echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';
echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));