<!-- home.php -->

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php
    $pageTitle = "GARC";
    include 'components/heade.php';
    ?>
</head>

<body>
    <?php include 'components/navbar.php';  ?>

    <div class="container">
        <?php include 'components/carousel.php';  ?>
        
        <h1>Bem-vindo à página inicial!</h1>
        <p>teste de texto</p>
    </div>

    <?php
    include 'components/insertScripts.php';
    ?>
</body>

</html>