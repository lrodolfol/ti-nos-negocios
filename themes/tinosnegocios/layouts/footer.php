<!-- footer -->
<footer class="w3l-footer-29-main">
    <div class="footer-29 py-5">
        <div class="container py-md-4">

            <div class="row footer-top-29">

                <div class="col-lg-4 col-md-6 footer-list-29 footer-1">
                    <div class="footer-logo mb-4">
                        <a class="navbar-brand" href=<?= url(); ?> >
                          <!-- <span class="fa fa-align-right"></span> -->
                            <img src=<?= theme("assets/images/logoIco.png");?> >
                            TI NOS NEGÓCIOS <span class="logo">Literalmente presente</span></a>
                    </div>
                    <!-- <p>Gosatria nos contactar?</p>
                                <p>Conte um pouco sobre o que você precisa e informe seu e-mail. Nós entraremos em contato o mais breve possível para conversa-mos</p> -->

                </div>

                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 pr-lg-5 mt-md-0 mt-5">
                    <h6 class="footer-title-29">Informações de contato </h6>
                    <!-- <p class="mb-2">Endereço : Corp Vision, 343 marketing, #21 cravel 1st lane street, NY - 62617.</p> -->
                    <p class="mb-2">WhatsApp : <a href="tel:+55(35) 998509829">+55(35) 9 9850-9829</a></p>
                    <p class="mb-2">Email : <a href="mailto:contato@tinosnegocios.com.br">contato@tinosnegocios.com.br</a></p>
                    <!-- <p>Support : <a href="mailto:info@support.com">info@support.com</a></p> -->

                    <div class="main-social-footer-29 mt-md-4 mt-3">
                        <!--<a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a> -->
                        <a href="https://www.instagram.com/tinosnegocios/" target="_blank" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="https://www.linkedin.com/company/79716507" target="_blank" class="linkedin"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-lg-0 mt-5">
                    <ul>
                        <h6 class="footer-title-29">Services</h6>
                        <li><a href="<?= url("software-desktop"); ?>">Softwares Desktop</a></li>
                        <li><a href="<?= url("sistemas-web"); ?>">Sistemas WEB</a></li>
                        <li><a href="<?= url("sites"); ?>">Criação/Suporte de sites</a></li>
                        <li><a href="<?= url("mobile"); ?>">Desenvolvimento de APP</a></li>
                        <!-- <li><a href="#url">Desenvolvimento de APP</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-lg-0 mt-5">
                    <ul>
                        <h6 class="footer-title-29">A TNN</h6>
                        <li><a href="<?= url("sobre");?>">Sobre</a></li>
                        <li><a href="<?= url("backLog-desc"); ?>">Diferencial</a></li>
                        <li><a href="<?= url("blog"); ?>">blog</a></li>
                        <!-- <li><a href="contact.html">Get in touch</a></li> -->
                    </ul>
                </div>

            </div>

        </div>
    </div>
    <!-- copyright -->
    <section class="w3l-copyright text-center">
        <div class="container">
            <p class="copy-footer-29">© 2022 TI NOS NEGÓCIOS. All rights reserved.</p>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            &#10548;
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->
</footer>
<!-- //footer -->


<!-- Template JavaScript -->
<script src=<?= theme("assets/js/jquery-3.3.1.min.js"); ?>  ></script>
<script src=<?= theme("assets/js/theme-change.js"); ?>></script>

<!-- libhtbox -->
<script src=<?= theme("assets/js/lightbox-plus-jquery.min.js"); ?>></script>
<!-- libhtbox -->

<!-- banner slick slider -->
<script src=<?= theme("assets/js/slick.js"); ?>></script>
<script src=<?= theme("assets/js/script.js"); ?>></script>
<!-- //banner slick slider -->

<!-- magnific popup -->
<script src=<?= theme("assets/js/jquery.magnific-popup.min.js"); ?>></script>
<script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });
</script>
<!-- //magnific popup -->

<!-- script for tesimonials carousel slider -->
<script src=<?= theme("assets/js/owl.carousel.js"); ?>></script>

<script>
            $(document).ready(function () {
                $("#owl-demo1").owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        768: {
                            items: 1,
                            nav: false
                        },
                        1000: {
                            items: 1,
                            nav: false,
                            loop: false
                        }
                    }
                })
            })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!--//MENU-JS-->

<!-- Search -->
<script>
    $('.control').click(function () {
        $('body').addClass('search-active');
        $('.input-search').focus();
    });

    $('.icon-close').click(function () {
        $('body').removeClass('search-active');
    });
</script>
<!-- //Search -->

<script src="<?= theme("/assets/scripts.js"); ?>"></script>
<?= $this->section("scripts"); ?>



<script>
    $(function () {
        $("#formEmail").validate({
            rules: {
                email: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: "informe seu email válido."
                },
            },
            submitHandler: function (form) {
                $.ajax({
                    url: "sendEmail.php",
                    type: "POST",
                    data: $(form).serialize(),
                    success: function (response) {
                        $('#resultadoForm').html(response);
                    }
                });
                $('#formEmail')[0].reset();
            }
        });
    });
</script>

</body>

</html>