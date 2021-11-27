<?php snippet('header')?>

<?php snippet('menu-white')?>



    <?php //CATEGORIE WRAPPER ?>
    <div class="container container-categories categories-wrapper sectionOne">

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
    </div>



<?php snippet('footer')?>