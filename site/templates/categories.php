<?php snippet('general/header') ?>

<?php snippet('menu/menu-white')?>



    <?php //CATEGORIE WRAPPER ?>
    <div class="container container-categories categories-wrapper sectionOne">

        <?php //CATEGORIE LIST ?>
        <ul class="categories-wrapper__machines">
            <?php foreach ($page->children()->listed() as $category): ?>

                <?php //CATEGORY LIST ITEM ?>
                <li class="categories-wrapper__machines__category">
                    <a href="<?=$category->url()?>">
                        <figure>
                            <?php $thumbnail = $category->thumbnail()->ToFile(); ?>
                            <?php /* <img class="overview-image" src="<?= $thumbnail->url() ?>" alt="<?=$category->image()->alt()?>"> */ ?>
                            <?= $thumbnail->crop(100) ?>
                            <figcaption class="h2-categories"><?=$category->title()?></figcaption>
                        </figure>
                    </a>
                </li>
            <?php endforeach?>
        </ul>
    </div>



<?php snippet('general/footer')?>