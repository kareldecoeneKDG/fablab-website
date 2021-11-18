<?php snippet('header') ?>
    <!-- SNIPPET - MENU -->
    <?php snippet('menu-white') ?>

    <!-- CATEGORIE WRAPPER -->
    <section class="categories-wrapper sectionOne">   
        <!-- CATEGORIE LIST -->
        <ul class="categories-wrapper__machines">
            <?php foreach ($page->children()->listed() as $category): ?>
                <!-- CATEGORY LIST ITEM -->
                <li class="categories-wrapper__machines__category">
                    <a href="<?= $category->url() ?>">
                        <figure>
                                <img class="overview-image" src="<?= $category->image()->url() ?>" alt="">
                                <figcaption class="h2-categories"><?= $category->title() ?></figcaption>
                        </figure>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>   

<!-- FOOTER SNIPPET -->
<?php snippet('footer') ?>