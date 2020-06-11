<?php
session_start();
print_r($_SESSION);
?>
<p>
    <b>Nome: </b><?= $_SESSION['nome'] ?>
        <br>
    <b>E-mail: </b><?= $_SESSION['email'] ?>
</p>

<?php
$_SESSION['email'] = 'gabrielfilho@emailaz.com.br';
?>

<p>
    <a href="basicoSessao.php">Voltar</a>
</p>

<p>
    <a href="basicoSessaoLimpar.php">Limpar Sessão</a>
</p>