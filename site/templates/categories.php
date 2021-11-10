<?php snippet('header') ?>
    <section class="categories-wrapper">   
        <ul class="categories-wrapper__machines">
            <?php foreach ($page->children()->listed() as $category): ?>
                <li class="categories-wrapper__machines__category">
                    <a href="<?= $category->url() ?>">
                        <figure>
                            <?php if($img = $category->image()->toFile()): ?>
                                <img class="overview-image" src="<?= $img->url()?>" alt="">
                                <figcaption class="h2-categories"><?= $category->title() ?></figcaption>
                            <?php endif; ?>
                        </figure>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>   
<?php snippet('footer') ?>