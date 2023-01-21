<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Desenvolvimento de sofware, Desenvolvimento de Sistemas, PHP, MySql, WordPress"/>
        <meta name="keywords" content="desenvolvimento, desenvolvedor, Freelancer, web, desenvolvedor web, desenvolvimento web, sites, 
              sistemas, php, mysql, sql, jquery, javascript, java, profissional, android, ios, wordpress, aplicativos, aplicações, software, 
              app, analista de sistemas, desenvolvedor wordpress" />
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://www.tinosnegocios.com.br"/>

        <title> <?= $title . ' - ' . $subtitle; ?></title>

        <!-- google fonts -->
        <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>

        <link rel="shortcut icon" href=<?= theme("/assets/images/logoIco.ico"); ?> >

    </head>
    <body>
        <!--header-->
        <header id="site-header" class="fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark stroke">
                    <h1>
                        <a class="navbar-brand" href=<?= url(); ?> >
                          <!-- <span class="fa fa-align-right"></span> -->
                            <img src=<?= theme("/assets/images/logoIco.png"); ?>>
                            <?= $title; ?> <span class="logo"><?= $subtitle; ?></span></a>
                    </h1>

                    <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mx-lg-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="<?= urldecode("servicos"); ?>">Inicio <!-- <span class="sr-only">(current)</span> --> </a>
                            </li>
                            <li class="nav-item @@services__active">
                                <a class="nav-link" href="#servicos">Serviços</a>
                            </li>
                            <li class="nav-item @@about__active">
                                <a class="nav-link" href="#destaques">Destaques</a>
                            </li>
                            <li class="nav-item @@contact__active">
                                <a class="nav-link" href="#contato">Contato</a>
                            </li>
                            <li class="nav-item @@contact__active">
                                <a class="nav-link" href=<?=url("blog");?>>Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="mobile-position">
                        <nav class="navigation">
                            <div class="theme-switch-wrapper">
                                <label class="theme-switch" for="checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <div class="mode-container py-1">
                                      <!-- <i class="gg-sun"></i>
                                      <i class="gg-moon"></i> -->
                                        <a href=<?= url("tnn-backlog"); ?>> <img src=<?= theme("assets\images\linkBackLog.png"); ?>></a>
                                    </div>
                                </label>
                            </div>
                        </nav>
                    </div>
                </nav>

            </div>
        </header>
        <!--/header-->
        
        <!-- hero slider Start -->
<div class="banner-wrap">
    <div class="banner-slider">
        <!-- hero slide start -->
        <div class="banner-slide bg1">
            <div class="container">
                <div class="hero-content">
                    <h1 data-animation="flipInX" data-delay="0.8s" data-color="#fff">
                        Criando soluções para sua necessidade</h1>
                    <p data-animation="fadeInDown" class="mt-4">Analisamos minusiosamente as necessidades de cada amigo cliente,
                        elaboramos soluções práticas para atendê-las</p>
                    <div class="cta-btn" data-animation="fadeInUp" data-delay="1s">
                        <a href="<?= url("sobre"); ?>" class="btn btn-style btn-tnn-info">Conheça-nos</a>
                    </div>
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <!-- hero slide end -->
        <!-- hero slide start -->
        <div class="banner-slide bg2">
            <div class="container">
                <div class="hero-content">
                    <h1 data-animation="fadeInDown" data-delay="0.8s" data-color="#fff">
                        Gerando resultados
                    </h1>
                    <p data-animation="fadeInDown" class="mt-4">Uma produção agilziada e intuitiva, 
                        aprove a coleta e consistência de dados gerando informações preciosas e valiosas</p>
                    <div class="cta-btn" data-animation="fadeInDown" data-delay="1s">
                        <a href="<?= url("sobre"); ?>" class="btn btn-style btn-tnn-info">Conheça-nos</a>
                    </div>
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <!-- hero slide end -->
        <!-- hero slide start -->
        <div class="banner-slide bg3">
            <div class="container">
                <div class="hero-content">
                    <h1 data-animation="fadeInUp" data-color="#fff" data-delay="0.8s">Produtos e Serviços personalizados</h1>
                    <p data-animation="fadeInUp" class="mt-4">Soluções especiais e sob-medida para cada projeto,
                        Apoio constante e dando vida às novas ideias</p>
                    <div class="cta-btn" data-animation="fadeInDown" data-delay="1s">
                        <a href="<?= url("sobre"); ?>" class="btn btn-style btn-tnn-info">Conheça-nos</a>

                    </div>
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <!-- hero slide end -->
        <!-- hero slide start -->
  
    </div>
    <div class="shape">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
        <path fill-opacity="1">
        <animate attributeName="d" dur="20000ms" repeatCount="indefinite"
                 values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                 M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

        </path>

        </svg>
    </div>
</div>
<!-- hero slider end -->

<!--CONTENT-->
<main class="main_content">
    <?= $this->section("content"); ?>
</main>