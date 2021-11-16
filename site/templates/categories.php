<?php snippet('header') ?>

    <?php snippet('menu') ?>

    <section class="categories-wrapper sectionOne">   
        <ul class="categories-wrapper__machines">
            <?php foreach ($page->children()->listed() as $category): ?>
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
<?php snippet('footer') ?>