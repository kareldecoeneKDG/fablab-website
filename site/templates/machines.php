<?php snippet('header') ?>

    <h1><?= $page->title() ?></h1>

    <ul class="machines">
        <?php foreach ($page->children()->listed() as $machine): ?>
            <li>
                <a href="<?= $machine->url() ?>">
                    <figure>
                        <?= $machine->image()->crop(500) ?>
                        <figcaption><?= $machine->title() ?></figcaption>
                    </figure>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    
<?php snippet('footer') ?>