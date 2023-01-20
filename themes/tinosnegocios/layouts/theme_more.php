<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>TI NOS NEGÓCIOS - Literalmente presente</title>

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
                        <a class="navbar-brand" href="<?= url(); ?>">
                            <img src=<?= theme("/assets/images/logoIco.png"); ?>>
                            TI NOS NEGÓCIOS <span class="logo">Literalmente presente</span></a>
                    </h1>


                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mx-lg-auto">
                            <li class="nav-item @@home__active">
                                <a class="nav-link" href="<?= url(); ?>">Inicio </a>
                            </li>
                            <li class="nav-item @@services__active">
                                <a class="nav-link" href="<?= urlDivName("servicos"); ?>">Serviços</a>
                            </li>
                            <li class="nav-item @@about__active">
                                <a class="nav-link" href="<?= urlDivName("destaques"); ?>">Destaques</a>
                            </li>
                            <li class="nav-item @@contact__active">
                                <a class="nav-link" href="<?= urlDivName("contato"); ?>">Contato</a>
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



        <!--CONTENT-->
        <main class="main_content">
            <?= $this->section("content"); ?>
        </main>