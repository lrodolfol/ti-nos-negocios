<?php $this->layout("layouts/theme_more"); ?>

<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4"><?= $title; ?></h2>
            <p class="inner-page-para mt-2"><?= $desc; ?></p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>

<section class="container" id="work">
    <div class="row">
        <div class="col-lg-8 mt-lg-0 mt-5 about-right-faq">
            <p class="mt-5">
                Acreditamos que o cliente tem o direito de saber de cada minimo detalhe de seu pedido, afinal ele é seu! <br>
                Por isso, disponibilizamos para nossos clientes, um acesso exclusivo a uma plataforma 
                para que eles possam acompanhar todo andamento do projeto. 
            </p>

            <p class="mt-5">
                Além de receber as notificações via e-mail ou sms sobre cada atualização do projeto,
                o cliente terá seu acesso exclusivo em nosso portal de clientes com senha e nome de usuário <br> 
                lá ele poderá ver todo andamento do projeto desde o 1ª contato conosco até a antrega final do produto <br>            
            </p>

            <p class="mt-5">
                Isso garante uma comunicação efetiva, rápida e direta! como todo processo de desenvolvimento é baseado em metodologias ágeis,<br>
                garantimos a progressão e entrega continua de cada feature e a possibilidade de alterações de requisitos e 
                "um passo atrás" para propor novas mudanças sem perder a nossa agilidade e qualidade no desenvolvimento.
            </p>            
        </div>

        <div class="col-lg-4">
            <img src="<?= theme("assets/images/updating-software.png"); ?>" alt="" class="img-fluid">
        </div>
    </div>

</section>

<section class="w3l-features mt-5"> 
    <div class="row">
        <div class="col-lg-12 mt-5">
            <h3 class="title-big text-center">Quais os beneficios disso?</h3>
        </div>
    </div>

    <div class="row container mt-4">
        <div class="col-lg-2">
            <img src=<?= theme("assets/images/checked.png"); ?> alt="checked"/>Comunicação
        </div>
        <div class="col-lg-2">
            <img src=<?= theme("assets/images/checked.png"); ?> alt="checked"/>Agilidade
        </div>
        <div class="col-lg-2">
            <img src=<?= theme("assets/images/checked.png"); ?> alt="checked"/>Constância
        </div>
        <div class="col-lg-2">
            <img src=<?= theme("assets/images/checked.png"); ?> alt="checked"/>Automatização
        </div>
        <div class="col-lg-2">
            <img src=<?= theme("assets/images/checked.png"); ?> alt="checked"/>Satistação
        </div>
        <div class="col-lg-2">
            <img src=<?= theme("assets/images/checked.png"); ?> alt="checked"/>Valor agregado
        </div>
    </div>

    <div class="row text-center">
        <div class="col-lg-12">
            <p class="mt-5 text-center">
                Coisas assim você só encontra na TNN!
            </p>
        </div>
    </div>
</section>

<section class="py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="title-big text-center">Quer saber mais sobre o que é metodologia ágeis?</h3>
            </div>

            <div class="col-lg-12">
                <p class="mt-4">
                    A web application (web app) is an application program that is stored on a remote server and delivered over 
                    the internet through a browser interface. Web services are web apps by definition and many, although not all, websites contain web apps.

                    Developers design web applications for a wide variety of uses and users, 
                    from an organization to an individual for numerous reasons. Commonly used web applications can include webmail
                    online calculators or e-commerce shops. While users can only access some web apps by a specific browser, most are available no matter the browser.
                </p>
            </div>

            <div class="col-lg-12">
                <div class="text-center">
                    <h3 class="mt-md-5">Despertou mais interesse? de uma busca por esse tema em nosso blog!</h3>
                    <a class="btn btn-info btn-style mt-md-2 mt-4 mr-md-4 mr-3" href=<?= url("blog"); ?>> TNN- Blog </a> 
                </div>
            </div>

        </div>

    </div>
</section>

<div class="blog_articles">
    <?php $this->insert("layouts/footer"); ?>
</div>