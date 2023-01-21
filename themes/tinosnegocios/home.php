<?php $this->layout("layouts/theme",
        ['title' => $title, 'subtitle' => $subtitle]); ?>

<!-- features section -->
<section id="servicos"></section>
<section class="w3l-features py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row main-cont-wthree-2 align-items-center">
            <div class="col-lg-6 feature-grid-left pr-lg-5">
                <!-- <h5 class="title-small">Every day brings new challenges</h5> -->
                <span class="title-small">Atendendo a pequenos e médios serviços</span>
                <h3 class="title-big mb-4">Soluções que podem cooperar naquilo que você precisa. Conheça e comprove</h3>
                <!-- <p class="text-para">Soluções que podem cooperar naquilo que você precisa. Conheça e comprove                </p> -->
                <a href="about.html" class="btn btn-style btn-tnn-info mt-lg-5 mt-4">Ver todas</a>
            </div>
            <div class="col-lg-6 feature-grid-right mt-lg-0 mt-md-5 mt-4">
                <div class="call-grids-w3 d-grid">
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <img src="<?= theme("assets/images/webDev.png"); ?>" alt="" class="img-fluid">
                        </div>
                        <h4><a href="<?= url("sistemas-web"); ?>" class="title-head">Sistemas WEBs</a></h4>
                    </div>
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <img src="<?= theme("assets/images/webResponsive.png"); ?>" alt="" class="img-fluid">
                        </div>
                        <h4><a href="<?= url("sites"); ?>" class="title-head">Criação e edição de sites</a></h4>
                    </div>
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <img src="<?= theme("assets/images/sofWeb.png"); ?>" alt="" class="img-fluid">
                        </div>
                        <h4><a href="<?= url("software-desktop"); ?>" class="title-head">Sofwares Dektop</a></h4>
                    </div>
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <img src="<?= theme("assets/images/appPhone.png"); ?>" alt="" class="img-fluid">
                        </div>
                        <h4><a href="<?= url("mobile"); ?>" class="title-head">Criação de App</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features section -->


<!-- home page about section -->
<section id="destaques"></section>
<section class="w3l-homeblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="title-big">Usamos metodologias para entregar o melhor resultado</h3>
                    <p class="mt-md-4 mt-3">Dividimos e valorizamos cada etapa de trabalho para construção de um produto
                        confiável, ágil e que supera as expectativas. </p>
                    <ul class="service-list pt-lg-2 mt-4">
                        <li class="service-link"><a><span class="fa fa-check-circle"></span> Comunicação e feedBack</a>
                        </li>
                        <li class="service-link"><a><span class="fa fa-check-circle"></span> Integração contínua</a>
                        </li>
                        <li class="service-link"><a><span class="fa fa-check-circle"></span> Realeses necessários</a>
                        </li>
                    </ul>
                </div>
                <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-md-5 mt-4">
                    <div class="row position-relative">
                        <div class="col-6">
                            <!-- <img src="assets/images/a.jpg" alt="" class="radius-image img-fluid"> -->
                            <img src="<?= theme("assets/images/DevSoftware.png"); ?>" alt="Software enginer">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->


<!-- home page progress section -->
<section class="w3l-progress" id="progress">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="<?= theme("assets/images/softwareOnline.png"); ?>" alt="" class="radius-image img-fluid">
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                    <span class="title-small">Acompanhamento constante</span>
                    <h3 class="title-big mb-4 pb-lg-2">Seu projeto em tempo real. Você totalmente integrado ao processo
                        de desenvolvimento</h3>
                    <p class="mt-md-4 mt-3">Conheça nosso diferencial onde você como cliente tem acesso a uma area
                        exclusiva
                        para acompanhar o processo de desenvolvimento do seu pedido. Todas as alterações
                        serão exbidas e permanecerão visiveis para sua conferência e de sua equipe.
                        As informações são em tempo real e com constante atualizações.
                        Você estará completamente interado com o processo.</p>
                    <p>Quer conhecer mais?</p>

                    <div style="margin-top: 20px" class="cta-btn" data-animation="fadeInDown" data-delay="1s">
                        <a href=<?=url("em-tempo-real");?> class="btn btn-style btn-tnn-info">Conhecer mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page progress section -->

<?php if (isset($testimonials)): ?>

    <?php $this->insert("layouts/successful_case"); ?>

    <?php $this->insert("layouts/testimonials", ['testimonials' => $testimonials]); ?>

<?php endif; ?>

<section id="contato"></section>
<section class="w3l-project py-5" id="subscribe">
    <div class="container py-md-5 py-sm-4 py-2">
        <div class="bottom-info">
            <div class="header-section text-center">
                <h3 class="title-big">Quer falar com a gente?</h3>
                <p class="mt-3 pr-lg-5">Conte um pouco sobre o que você precisa e informe seu e-mail.
                    Nós entraremos em contato o mais breve possível para conversa-mos</p>

                <div id="resultadoForm" class="mensagemFormEmail"></div>
            </div>
            <form class="subscribe mt-5" method="post" name="formEmail" id="formEmail">
                <div class="input-group-text"><span class="fa fa-paper-plane"></span></div>

                <input type="email" name="email" placeholder="Insira seu e-mail" required="true">

                <button class="btn btn-style btn-tnn-info">Enviar</button>
            </form>
        </div>
    </div>
</section>

<div class="blog_articles">
    <?php $this->insert("layouts/footer"); ?>
</div>