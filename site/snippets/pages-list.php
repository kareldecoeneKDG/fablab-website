<?php foreach ($site->children()->listed() as $subpage): ?>
    <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
<?php endforeach ?>