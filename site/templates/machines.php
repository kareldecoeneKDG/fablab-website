<?php snippet('header') ?>

    <?php snippet('menu-white') ?>
    <h1><?= $page->title() ?></h1>
    
    <ul class="machines">
        <li>1</li>
        <?php foreach ($page->children()->listed() as $category): ?>
            <li>
                <a href="<?= $category->url() ?>">
                    <figure>
                        <?= $category->image()->crop(500) ?>
                        <figcaption><?= $category->title() ?></figcaption>
                    </figure>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    
<?php snippet('footer') ?>