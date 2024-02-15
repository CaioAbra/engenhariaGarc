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

    <main>
        <section>
            <?php include 'components/carousel.php';  ?>
        </section>

        <section class="introducaoGarc">
            <?php include 'components/introducaoGarc.php';  ?>
        </section>
    </main>

    <?php
    include 'components/insertScripts.php';
    ?>
</body>

</html>