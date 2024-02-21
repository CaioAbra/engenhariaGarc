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

    <main class="engenharia-civil">
        <section class="banner banner-engenharia-civil">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-12">
                        <h6 class="banner-subtitle">Conheça Mais</h6>
                        <h1 class="banner-title">Engenharia Civil: Construindo o Futuro</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8">
                        <h4>O que é a engenharia civil?</h4>
                        <p>
                            A Engenharia Civil é a arte de moldar o mundo ao nosso redor, criando estruturas que
                            sustentam e inspiram nossa sociedade. Dos arranha-céus imponentes às pontes majestosas, os
                            engenheiros civis são os arquitetos do progresso, garantindo que nossas cidades cresçam com
                            segurança e sustentabilidade.
                        </p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card-img">
                            <img src="<?php echo BASE_PATH_ASSETS;?>img/whyEnengenhariaCivil.jpg" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="serviscos-prestados">
            <div class="container">
                <div class="row text-align-center">
                    <div class="col-12">
                        <h4>
                            Serviços Prestados
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card card-acordion card-Alvenaria">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Alvenaria</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        A Alvenaria é o alicerce da construção civil, onde cada tijolo é uma peça do
                                        quebra-cabeça que forma nossos lares e comunidades. É a arte de empilhar blocos
                                        e pedras para criar não apenas paredes, mas sim símbolos de estabilidade e
                                        durabilidade. Das casas acolhedoras aos edifícios imponentes, a alvenaria é a
                                        base sobre a qual construímos nosso futuro.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card card-acordion card-Manutencao">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Manutenção</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        A Manutenção é o coração pulsante da engenharia civil, garantindo que as
                                        estruturas que criamos continuem a prosperar com o tempo. É o cuidado meticuloso
                                        e o trabalho árduo que preservam a integridade das nossas construções,
                                        protegendo não apenas o que está à vista, mas também as fundações que sustentam
                                        nossas esperanças e sonhos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card card-acordion card-Pintura">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Pintura</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        A Pintura é a paleta com a qual damos vida aos nossos espaços, transformando
                                        paredes nuas em telas de expressão e beleza. Cada pincelada é uma história, cada
                                        cor uma emoção, e cada parede um testemunho do nosso estilo e personalidade. Da
                                        simplicidade de um branco puro à vibrante complexidade das cores, a pintura é a
                                        arte que torna nossas casas verdadeiramente nossas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card card-acordion card-Revestimento">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Revestimento</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        O Revestimento é a armadura que protege e embeleza nossas construções,
                                        adicionando camadas de sofisticação e funcionalidade aos espaços que habitamos.
                                        Dos azulejos luxuosos aos porcelanatos resistentes, cada material é uma escolha
                                        cuidadosa, uma declaração de estilo e uma garantia de qualidade. É a última peça
                                        do quebra-cabeça que transforma uma simples casa em um lar acolhedor e elegante.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card card-acordion card-Serralheria">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Serralheria</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        A Serralheria é a arte de moldar o metal, transformando-o em obras de arte que
                                        resistem ao tempo e à adversidade. Dos portões imponentes às grades ornamentais,
                                        cada peça é forjada com habilidade e precisão, unindo forma e função em uma
                                        harmonia duradoura. É o toque final que eleva uma construção simples à categoria
                                        de obra-prima, adicionando um brilho de elegância e segurança ao nosso ambiente.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3>
                            Por que escolher a <span>GARC</span>?
                        </h3>
                        <p>
                            Na GARC Engenharia, nosso compromisso é superar as expectativas de nossos clientes em cada
                            projeto que realizamos. Entre em contato conosco hoje mesmo para saber como podemos ajudá-lo
                            a transformar sua visão em realidade.
                        </p>

                        <a href="<?php echo BASE_PATH; ?>contato">
                            Fale conosco !
                        </a>

                    </div>

                    <div class="col-12 col-md-6">
                        <div class="imageContato">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/entreEmContato.jpg" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="">
        <?php include 'components/footer.php'; ?>
    </footer>
    <?php
    include 'components/insertScripts.php';
    ?>

</body>

</html>