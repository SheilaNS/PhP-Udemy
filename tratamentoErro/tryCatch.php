<div class="titulo">Try/Catch</div>

<?php

echo 7 / 0; // o resultado gera INF e não erro
// echo intdiv(7, 0); // o resultado gera erro
echo '<br>';

try {
    echo intdiv(7, 0);
} catch(Error $e) {
    echo 'Teve um erro aqui<br>';
}

try {
    throw new Exception('Um erro muito estranho');
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
} catch(Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado!<br>';
}

echo 'Execução continua ...<br>';