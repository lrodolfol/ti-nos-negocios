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
<!-- //about breadcrumb -->
<section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">

                <div class="col-lg-9 mt-lg-0 mt-5 about-right-faq align-self">
                    <h5 class="title-small mb-1">Sobre a TI NOS NEGÓCIOS - <?= $title; ?></h5>
                    <h3 class="title-big">Acreditamos que entre códigos há solução para tudo!</h3>
                    <!-- <h4 class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut just.</h4> -->
                    <p class="mt-4">Você pode solicitar nossos serviçoes para construção de soluções que atenda </br>
                        dinamicidade de informações, manipulação de dados execuções de rotinas administrativas e/ou financeiras, <br>
                        comunicação entre serviços e solicitações para mais diversos sofwares de terceiros. <br>
                        Tudo de forma online, segura e acessivel por qualquer dispositivo com acesso à internet. <br>                     
                    </p>

                </div>

                <div class="col-lg-3 mt-lg-0 mt-5 about-left-faq">
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <img src="<?= theme("assets/images/sofWeb.png"); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>  

        </div>
    </div>
</section>

<section class="w3l-features py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="title-big text-center">Quer saber mais sobre o que é um sitema WEB?</h3>
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
                <a class="btn btn-info btn-style mt-md-2 mt-4 mr-md-4 mr-3" href=<?=url("blog");?>> TNN- Blog </a> 
                </div>
            </div>

        </div>

    </div>
</section>

<div class="blog_articles">
    <?php $this->insert("layouts/footer"); ?>
</div>