<?php //SNIPPET - HEADER ?>
<?php snippet('header') ?>

<?php //SNIPPET - MENU ?>
<?php snippet('menu-white') ?>



<section class="content-blog">
    <h1 class="h1"><?= $page->Subtitle()->html() ?></h1>

    <div class="content-blog__tag-filter">

        <?php //GET CURRENT URL ?>
        <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

        <?php foreach ($tags as $tag) : ?>
            <a class="content-blog__tag-filter__button-tag <?php if(strpos($url, $tag) !== false) { echo("active-tag"); } ?>" href="<?= url($page->url(), ['params' => ['tag' => $tag]]) ?>">
                <?= html($tag) ?>
            </a>
        <?php endforeach ?>
            
        <?php //BUTTON TO DELETE ACTIVE TAGS ?>
        <a id="remove-tag" class="content-blog__tag-filter__button-tag">Remove tags</a>
    </div>



    <hr class="lineTags">



    <?php //ALL BLOGS MOBILE ?>
    <div class="blog-wrapper">
        <?php foreach($articles as $article): ?>
            <article class="blog-wrapper__blog-overview">
                <img class="blog-wrapper__blog-overview__img img" src="<?= $article->image()->url()?>" alt="Blog overview image">

                <div class="blog-wrapper__blog-overview__text-wrapper">
                    <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?= $article->title()->html() ?></h2>

                    <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?= $article->text()->excerpt(70) ?></p>

                    <a class="blog-wrapper__blog-overview__text-wrapper__link button-small" href="<?= $article->url() ?>">Lees meer ></a>
                </div>
            </article>
        <?php endforeach ?> 
    </div>

    <?php //ALL BLOGS DESKTOP ?>
    <div class="blog-wrapper-desktop">
        <?php foreach($articles as $article): ?>
            <article class="blog-wrapper__blog-overview">
                <div>
                    <img class="blog-wrapper__blog-overview__img img" src="<?= $article->image()->url()?>" alt="Blog overview image">

                    <div class="blog-wrapper__blog-overview__text-wrapper">
                        <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?= $article->title()->html() ?></h2>
                        <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?= $article->text()->excerpt(50) ?></p>
                    </div>
                </div>

                <div>
                    <a class="blog-wrapper__blog-overview__text-wrapper__link button-small" href="<?= $article->url() ?>">Lees meer ></a>
                </div>
            </article>
        <?php endforeach ?>
    </div>
</section>



<?php //SNIPPET - FOOTER ?>
<?php snippet('footer') ?>

<?php //JAVASCRIPT REMOVE ACTIVE TAG ?>
<?= js('build/js/taginactive.js') ?>