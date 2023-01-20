<?php $v->layout("layouts/theme_more"); ?>

<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">

            <h2 class="title pt-md-5 pt-4"><?= $title; ?></h2>
            <p class="inner-page-para mt-2"><?= $desc; ?></p>


            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form class="form-backlog" action="<?= url('/tnn-backlog'); ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_input(); ?>
                            <div class="form-group">
                                <input class='form-control' type='email' name='email' id='email'/>
                            </div>

                            <div class="form-group">
                                <input class='form-control' type='password' name='password' id='password'/>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-style btn-tnn-info">Entrar</button>
                            </div>


                            <?= flash(); ?>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="hero-overlay"></div>
    </div>
</section>

<div class="blog_articles">
    <?php $v->insert("layouts/footer"); ?>
</div>