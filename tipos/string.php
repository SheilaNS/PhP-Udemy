<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma String';
    echo '<br>';
    var_dump("Eu também!"); // conta errado por causa da acentução;
    echo '<br>';
    
    // concatenação
    echo "Nós também" . ' somos';
    echo ("Nós também" . ' somos, mas com parênteses' .  '<br>');
    echo ("Número é " . 123);
    echo '<br>', "Também aceito", " vírgulas";
    
    echo '<br>';
    echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\"" . "\\";

    print("<br>Também existe a função print.");
    print "<br>Também existe a função print.";

    // Algumas funções
    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('MINIMIZADO');
    echo '<br>' . ucfirst('só a primeira letra maiúscula.');
    echo '<br>' . ucwords('todas as palavras com a primeira letra maiúscula');
    echo '<br>' . strlen('Quantas letras?');
    echo '<br>' . mb_strlen("Eu também!", "utf-8");
    echo '<br>' . substr('Só uma parte mesmo', 7, 6); 
    /* seleciona e mostra apenas as letras que estão a partir 
    de 7 unidade e mostra 6 unidades após o 7, nesse exemplo, 
    mostrará 'parte' */
    echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
