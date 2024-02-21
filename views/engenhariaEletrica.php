<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php
    $pageTitle = "Engenharia Elétrica | GARC";
    include 'components/heade.php';
    ?>
</head>

<body>
    <?php include 'components/navbar.php';  ?>

    <main class="engenharia-eletrica">
        <section class="banner banner-engenharia-eletrica">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-12">
                        <h6 class="banner-subtitle">Conheça Mais</h6>
                        <h1 class="banner-title">Engenharia Elétrica: Energizando o Mundo Moderno</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8">
                        <h4>
                            O QUE É A ENGENHARIA ELÉTRICA?
                        </h4>
                        <p>
                            A Engenharia Elétrica é o campo que explora os princípios da eletricidade, eletromagnetismo
                            e eletrônica para impulsionar o progresso em diversas áreas.
                        </p>
                        <p>
                            Originada no século XIX com o advento da energia elétrica comercial, esta disciplina
                            desempenha um papel vital na concepção, implementação e otimização de sistemas elétricos
                            para alimentar o mundo moderno.
                        </p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card-img">
                            <img src="<?php echo BASE_PATH_ASSETS;?>img/bannerEletrico.jpg" alt="" srcset="">
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
                        <div class="card card-acordion card-instalacao-eletrica">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Instalação Elétrica</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        A instalação elétrica é a espinha dorsal que facilita a transferência eficiente
                                        de energia elétrica de sua fonte até os pontos de uso. Seja conectando-se à rede
                                        de distribuição de energia ou a geradores privados, cada fio e dispositivo
                                        desempenha um papel crucial na garantia de um fornecimento seguro e confiável de
                                        eletricidade.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card card-acordion card-spda">
                            <div class="card-body">
                                <h5 class="card-title mb-0">SISTEMAS DE PROTEÇÃO CONTRA DESCARGAS ATMOSFÉRICAS - SPDA
                                </h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        Os Sistemas de Proteção Contra Descargas Atmosféricas (SPDA), conhecidos
                                        popularmente como para-raios, são mais do que meros adornos em telhados. São
                                        salvaguardas essenciais, exigidas pelos órgãos reguladores e elaboradas conforme
                                        as normas técnicas rigorosas da ABNT.
                                    </p>
                                    <p>
                                        Seu propósito é mitigar os danos causados por descargas atmosféricas, desde
                                        incêndios devastadores até a proteção da vida e da integridade dos sistemas
                                        elétricos. Investir em um SPDA é investir na segurança e na tranquilidade.
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