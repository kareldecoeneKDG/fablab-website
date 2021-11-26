<?php //SNIPPET - HEADER ?>
<?php snippet('header')?>

    <?php //SNIPPET - MENU WHITE ?>
    <?php snippet('menu-white')?>

    <?php //CATEGORIE WRAPPER ?>
    <section class="categories-wrapper sectionOne">

        <?php //CATEGORIE LIST ?>
        <ul class="categories-wrapper__machines">
            <?php foreach ($page->children()->listed() as $category): ?>

                <?php //CATEGORY LIST ITEM ?>
                <li class="categories-wrapper__machines__category">
                    <a href="<?=$category->url()?>">
                        <figure>
                                <img class="overview-image" src="<?=$category->image()->url()?>" alt="<?=$category->image()->alt()?>">
                                <figcaption class="h2-categories"><?=$category->title()?></figcaption>
                        </figure>
                    </a>
                </li>
            <?php endforeach?>
        </ul>
    </section>

<?php //FOOTER SNIPPET ?>
<?php snippet('footer')?>