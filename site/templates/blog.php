<?php snippet('general/header') ?>

<?php snippet('menu/menu-white')?>




<div class="container container-blog">
    <h1 class="h1"><?=$page->Subtitle()->html()?></h1>

    <div class="container-blog__tag-filter">
        <?php //GET CURRENT URL ?>
        <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>

        <?php foreach ($tags as $tag): ?>
            <!-- <a class="container-blog__tag-filter__button-tag <?php // if (strpos($url, $tag) !== false) {echo ("active-tag");}?>" href="<? // =url($page->url(), ['params' => ['tag' => $tag]])?>"> -->
            <a class="container-blog__tag-filter__button-tag <?php if (strpos($url, $tag) !== false) {echo ("active-tag");}?>" href="<?=$url?>/tag;<?php echo $tag ?>">
                <?=html($tag)?>
            </a>
        <?php endforeach?>

        <?php //BUTTON TO DELETE ACTIVE TAGS ?>
        <a id="remove-tag" class="container-blog__tag-filter__button-tag" href="http://localhost:4000/fablab-website/blog">Remove tags</a>
    </div>



    <hr class="lineTags">
    <?php foreach ($tags as $tag): ?>
        <?php if (strpos($url, $tag) !== false): ?>
            <br>
            <p class="tag-id__p">  Blogposts over
                <b> <?php echo $tag; ?> </b>
            </p>
        <?php endif?>
    <?php endforeach?>

    <?php //ALL BLOGS MOBILE ?>
    <div class="blog-wrapper">
        <?php foreach ($articles as $article): ?>
            <article class="blog-wrapper__blog-overview">
                <div>
                    <img class="blog-wrapper__blog-overview__img img" src="<?=$article->image()->url()?>" alt="<?=$article->image()->alt()?>">

                    <div class="text-wrapper-mobile">
                        <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?=$article->title()->html()?></h2>
                        <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?=$article->random()->excerpt(70)?></p>
                    </div>
                </div>

                <div class="blog-wrapper__blog-overview__text-wrapper">
                    <a class="blog-wrapper__blog-overview__text-wrapper__link button-small" href="<?=$article->url()?>">Lees artikel</a>
                </div>
            </article>
        <?php endforeach?>
    </div>



    <?php //ALL BLOGS DESKTOP ?>
    <div class="blog-wrapper-desktop">
        <?php foreach ($articles as $article): ?>
            <article class="blog-wrapper__blog-overview">
                <div>
                    <img class="blog-wrapper__blog-overview__img img" src="<?=$article->image()->url()?>" alt="<?=$article->image()->alt()?>">

                    <div class="blog-wrapper__blog-overview__text-wrapper">
                        <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?=$article->title()->html()?></h2>
                        <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?=$article->blogText()->excerpt(70)?></p>
                    </div>
                </div>

                <div>
                    <a class="blog-wrapper__blog-overview__text-wrapper__link button-small" href="<?=$article->url()?>">Lees artikel</a>
                </div>
            </article>
        <?php endforeach?>
    </div>
</div>



<?php snippet('general/footer')?>

<?=js('build/js/taginactive.js')?>