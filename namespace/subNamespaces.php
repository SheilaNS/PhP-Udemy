<?php namespace App; ?>

<div class="titulo">Sub-Namespaces</div>

<?php
echo __NAMESPACE__ . '<br>';
const CONSTANTE = 123;

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const CONSTANTE = 234;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const CONSTANTE = 345;

echo CONSTANTE . '<br>';
echo constant('\\' .__NAMESPACE__ . '\CONSTANTE') . '<br>';
echo \App\CONSTANTE . '<br>';
echo \App\Principal\CONSTANTE . '<br>';
echo \App\Principal\Especifico\CONSTANTE . '<br>';