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

    <main>

    </main>

    <footer class="">
        <?php include 'components/footer.php'; ?>
    </footer>
    <?php
    include 'components/insertScripts.php';
    ?>

</body>

</html>