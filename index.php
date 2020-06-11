<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PhP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PhP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <?php require_once('template/menu.php'); ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & SHEILA NAKASHIMA DOS SANTOS © <?= date('Y'); ?>
    </footer>    
</body>
</html>