<?php $v->layout("layouts/theme_more"); ?>

<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Conheça-nos</h2>
            <p class="inner-page-para mt-2">Literalmente presente. Saiba o porque.</p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //about breadcrumb -->
<section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                
                <div class="col-lg-12 mt-lg-0 mt-5 about-right-faq align-self">
                    <h5 class="title-small mb-1">Sobre a TI NOS NEGÓCIOS</h5>
                    <h3 class="title-big">Acreditamos que entre < > e < / > há solução para tudo!</h3>
                    <h4 class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut just.</h4>
                    <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, fugiat consequatur voluptatem ad.</p>
                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-md-4 mr-3" href="#contato"> Contate-nos! </a>

                    <a href="#small-dialog1" class="popup-with-zoom-anim play-view text-center position-absolute mt-md-4 mt-3 pt-md-3">
                        <span class="video-play-icon">
                            <span class="fa fa-play"></span> 
                        </span>
                    </a>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://www.youtube.com/embed/2N247cY2bEw" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5 pt-lg-5">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <i class="fa fa-xing" aria-hidden="true"></i>
                        <div class="area-box-info">
                            <h4><a href="#feature" class="title-head">Perfect Design</a></h4>
                            <p>Amus a ligula quam tesque et ut justo, Duis sed dolor et amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        <div class="area-box-info">
                            <h4><a href="#feature" class="title-head">Carefully Planned</a></h4>
                            <p>Amus a ligula quam tesque et ut justo, Duis sed dolor et amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <i class="fa fa-angellist" aria-hidden="true"></i>
                        <div class="area-box-info">
                            <h4><a href="#feature" class="title-head">Smartly Execute</a></h4>
                            <p>Amus a ligula quam tesque et ut justo, Duis sed dolor et amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="blog_articles">
    <?php $v->insert("layouts/footer"); ?>
</div>