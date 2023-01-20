<?php $v->layout("layouts/theme_more"); ?>

<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4"><?= ($title ?? "BLOG TNN"); ?></h2>
            <p class="inner-page-para mt-2"><?= ($desc ?? "Encontre dicas, noticias e mais informações que podem ser úteis para seu negócio"); ?></p>
        </div>
        <div class="hero-overlay"></div>

        <div class="container">
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-4">
                <form name="search" action="<?= url("/blog/buscar"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <input placeholder="Digite um termo" name="t" type="text" class="form-control" id="search-blog" required />
                    </div>
                    <button class="btn btn-style btn-tnn-info">Buscar</button>
                </form>
            </div>
       </div>
        </div>


    </div>
</section>

<div class="blog_page_header">
<?php if (empty($blog) && !empty($search)): ?>
            <h3>Sua pesquisa não retornou resultados</h3>
            <p>Você pesquisou por <b><?= $search; ?></b>. Tente outros termos.</p>
            <a href="<?= url("/blog"); ?>" title="Blog">...ou volte ao blog</a>
<?php elseif (empty($blog)): ?>
            <h3>Ainda estamos trabalhando aqui!</h3>
            <p>Estamos preparando um conteúdo que vai te ajudar muito em seus negócios.</p>
<?php else: ?>
            <?php foreach ($blog as $post): ?>
                    <?php $v->insert("blog/blog-list", ["post" => $post]); ?>

            <?php endforeach; ?>
            <?= $paginator; ?>
<?php endif; ?>

</div>



<div class="blog_articles">
    <?php $v->insert("layouts/footer"); ?>
</div>