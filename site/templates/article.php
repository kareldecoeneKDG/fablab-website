<?php //SNIPPET - HEADER ?>
<?php snippet('header') ?>

<?php //SNIPPET - MENU WHITE ?>
<?php snippet('menu-white') ?>



<div class="article-wrapper">
    <section class="content-article">
        <h1 class="content-article__title h1"><?= $page->title()->html() ?></h1>

        <img src="<?= $page->image()->url() ?>" alt="Article banner image">

        <div class="content-article__text-wrapper share">
            <a class="content-article__text-wrapper__icon" href=""><i class="fa fa-share"></i></a>
            <h3>Delen</h3>

            <a href="#" class="facebook-button"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter-button"><i class="fa fa-twitter"></i></a>
            <a href="#" class="whatsapp-button"><i class="fa fa-whatsapp"></i></a>
        </div>

        <p class="content-article__text-wrapper__p p"><?= $page->text()->kti() ?></p>

        <p class="content-article__text-wrapper__p__date p">Gepubliceerd op <?= $page->Date()->toDate('d-m-Y') ?></p>
    </section>



    <?php $related = $page->related()->toPages();
    if($related->count() > 0): ?>
        <section class="related-articles">
            <h2 class="h2">Gerelateerde blogposts</h2>

            <div class="blog-wrapper-related">
                <?php foreach ($related as $article) : ?>
                    <article class="blog-wrapper__blog-overview">
                        <a class="article-related" href="<?= $article->url() ?>">
                            <img class="img-related" src="<?= $article->image()->url() ?>" alt="Article preview image">
                            <h2 class="h2-related h2"><?= $article->title()->html() ?></h2>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>

        </section>
    <?php endif; ?>
</div>



<?php //JAVASCRIPT SHAREBUTTON ?>
<?= js('build/js/sharebuttons.js') ?>

<?php //SNIPPET - FOOTER ?>
<?php snippet('footer') ?>