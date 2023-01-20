<section id="clientes"></section>
<section class="w3l-testimonials" id="testimonials">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
        <div class="container py-lg-4 py-md-3 py-2 pb-lg-0">

            <h3 class="title-big text-center mb-sm-5 mb-4">Feedback dos Clientes</h3>
            <h5 class="title-small text-center mb-1">Cada apoio e cada feedback nos impulsiona a fazer mais!</h5>

            <!-- /grids -->
            <div class="testimonial-width">
                <div id="owl-demo1" class="owl-two owl-carousel owl-theme">

                    <?php foreach ($testimonials as $testimonial) { ?>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q> <?= $testimonial->testimonies; ?></q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img">
                                            <img src="<?= image("$testimonial->path_photo",15 ,15); ?> "
                                                 class="img-fluid"
                                                 alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3> <?= $testimonial->name;?> </h3>
                                            <p class="indentity"> <?= $testimonial->segment;?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>