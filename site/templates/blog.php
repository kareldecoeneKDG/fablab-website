<?php snippet('header') ?>

    <!-- SNIPPET - MENU -->
    <?php snippet('menu-white') ?>

<section class="content-blog">
    <h1 class="h1"><?= $page->Subtitle()->html() ?></h1>

    <div class="content-blog__tag-filter">
        <?php foreach ($tags as $tag) : ?>

            <a class="content-blog__tag-filter__button-tag" href="<?= url($page->url(), ['params' => ['tag' => $tag]]) ?>">
                <?= html($tag) ?>
            </a>

        <?php endforeach ?>



<div class="blog-wrapper">
    <?php foreach($articles as $article): ?>
    <article class="blog-wrapper__blog-overview">
       <img class="blog-wrapper__blog-overview__img img" src="<?= $article->image()->url()?>" alt="">
       <div class="blog-wrapper__blog-overview__text-wrapper">
        <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?= $article->title()->html() ?></h2>
        <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?= $article->text()->excerpt(70) ?></p>
        <a class="blog-wrapper__blog-overview__text-wrapper__link a" href="<?= $article->url() ?>">Lees meer ></a>
       </div>
    </article>
    <?php endforeach ?> 
</div>
</section>

<?php snippet('footer') ?>