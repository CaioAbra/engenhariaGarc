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

    <main class="energiaSolar">
        <section class="banner banner-energiaSolar">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-12">
                        <h6 class="banner-subtitle">Desvende o Potencial do Sol</h6>
                        <h1 class="banner-title">Energia Solar: Iluminando o Futuro Sustentável</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="introduction">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>O Poder do Sol</h4>
                        <p>
                            A energia solar é uma fonte inesgotável de energia limpa e renovável que vem do sol. É uma
                            das formas mais eficazes de reduzir a dependência de combustíveis fósseis e mitigar os
                            impactos das mudanças climáticas.
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="benefits">
            <div class="container">
                <div class="row text-align-center">
                    <div class="col-12">
                        <h4>Beneficios da energia solar</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-acordion card-Sustentabilidade">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Sustentabilidade</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        A energia solar é uma fonte renovável e limpa de energia, o que significa que
                                        não emite gases de efeito estufa ou poluentes atmosféricos durante sua produção
                                        ou uso, ajudando a reduzir a pegada de carbono e mitigar as mudanças climáticas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-acordion card-Economia">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Economia de Energia</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        Instalar sistemas de energia solar em residências, empresas e instalações
                                        industriais pode reduzir significativamente os custos de eletricidade a longo
                                        prazo, proporcionando economia de dinheiro aos proprietários e operadores.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-acordion card-independencia">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Independência</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        A energia solar permite que os consumidores gerem sua própria eletricidade,
                                        reduzindo sua dependência da rede elétrica convencional e fornecedores de
                                        energia, garantindo maior autonomia e segurança energética.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-acordion card-baixa-manutencao">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Baixa Manutenção</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        Os sistemas de energia solar requerem pouca manutenção, geralmente limitada à
                                        limpeza dos painéis solares para garantir sua eficiência máxima. Isso resulta em
                                        custos de operação mais baixos e maior confiabilidade a longo prazo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-acordion card-valorizacao">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Valorização Imobiliária</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        Residências e edifícios comerciais equipados com sistemas de energia solar
                                        tendem a ter um valor de revenda mais alto e são mais atrativos para compradores
                                        conscientes da sustentabilidade.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-acordion card-Incentivos">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Incentivos Fiscais</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        Muitas jurisdições oferecem incentivos fiscais e programas de subsídios para a
                                        instalação de sistemas de energia solar, tornando o investimento inicial mais
                                        acessível e atraente para os consumidores.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="duvidasFrequentes">
            <div class="container">
                <div class="row text-align-center">
                    <div class="col-12">
                        <h4>
                            Duvidas Frequentes
                        </h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    Como funciona a energia solar?
                                </div>
                                <div class="accordion-content">
                                    Através de painéis solares ou módulos fotovoltaicos a energia solar é
                                    transformada
                                    em energia elétrica. É um método sustentável e econômico.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    Preciso adequar meu medidor para o sistema de geração solar?
                                </div>
                                <div class="accordion-content">
                                    Se o medidor de energia não for bidirecional, será necessário substituí-lo. Esta
                                    troca é necessária para que você seja recompensado pela energia produzida e não
                                    consumida, o medidor bidirecional é capaz de medir o fluxo de energia nos dois
                                    sentidos (consumo e geração). A troca do medidor pode ser realizada apenas pela
                                    distribuidora de energia do seu estado e acontece após formalização e inspeção.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    O sistema requer manutenção preventiva?
                                </div>
                                <div class="accordion-content">
                                    A manutenção preventiva dos painéis solares consiste em uma boa limpeza
                                    periódica,
                                    reduzindo o risco de avarias e perda de eficiência. Além disso, também é
                                    necessária
                                    uma manutenção preventiva nos quadros de proteção do sistema fotovoltaico.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    É necessário algum tipo de obra no telhado?
                                </div>
                                <div class="accordion-content">
                                    A equipe de instalação verificará as condições do telhado e estrutura, de forma
                                    que
                                    a instalação seja efetuada apenas nos casos em que não gere riscos para o
                                    cliente e
                                    para os trabalhadores.
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    É possível zerar minha conta de energia?
                                </div>
                                <div class="accordion-content">
                                    Você conseguirá reduzir sua conta de energia em até 95%. O pagamento das tarifas
                                    referentes ao custo de disponibilidade do sistema de distribuição da rede,
                                    iluminação pública, encargos e impostos permanece, de acordo com a com a
                                    Resolução
                                    Normativa no 414, de setembro de 2010.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    O que acontece se eu produzir mais energia com meu sistema fotovoltaico do que
                                    consumir?
                                </div>
                                <div class="accordion-content">
                                    A energia será convertida em créditos que poderão ser compensados em um período
                                    de
                                    até 60 meses. Quando há geração e consumo simultaneamente, o medidor da
                                    distribuidora não faz nenhum registro e a compensação é imediata. Caso você
                                    possua
                                    outra residência na mesma titularidade da distribuidora, o excedente poderá ser
                                    abatido desta outra conta.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    Como uso meus créditos de energia?
                                </div>
                                <div class="accordion-content">
                                    Os créditos serão utilizados automaticamente em meses em que o consumo for maior
                                    do
                                    que a geração do sistema num período de até 60 meses.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    O que acontece com o sistema durante a noite e em dias nublados?
                                </div>
                                <div class="accordion-content">
                                    O seu sistema fotovoltaico é dimensionado para minimizar os efeitos destes
                                    períodos.
                                    Ou seja, o sistema é projetado para que em determinados períodos você produza
                                    mais
                                    energia e compense a diminuição. Durante a noite não ocorre geração e a sua
                                    unidade
                                    irá consumir energia da rede elétrica da distribuidora. Já nos dias dublados, a
                                    geração de energia será menor.
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