<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php
    $pageTitle = ucwords(str_replace('-', ' ', basename($_SERVER['REQUEST_URI']))) . " | GARC";
    include 'components/heade.php';
    ?>
</head>

<body>
    <?php include 'components/navbar.php';  ?>

    <div class="container">
        <h1>Projetos</h1>
        <p>teste de texto</p>
    </div>

    <?php
    include 'components/insertScripts.php';
    ?>
</body>

</html>