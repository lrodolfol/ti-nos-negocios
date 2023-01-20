<article>
            <a title="<?= $post->title; ?>" href="<?= url("/blog/{$post->uri}"); ?>">
                <img title="<?= $post->title; ?>" alt="Blog" src="<?= url($post->cover); ?>"/>
            </a>

                <p><?= $post->category; ?> <?= $post->author()->first_name; ?>
                    &bull;
                <?= date_fmt($post->post_at); ?></p>

                <p><a title="<?= $post->title; ?>" href="<?= url("/blog/{$post->uri}"); ?>"><?= $post->title; ?></a></p>

                <p><a title="<?= $post->title; ?>" href="<?= url("/blog/{$post->uri}"); ?>"><?= str_limit_chars($post->subtitle, 120); ?></a></p>

</article>