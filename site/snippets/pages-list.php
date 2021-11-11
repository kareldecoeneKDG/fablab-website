<ul class="nav-links">
    <?php foreach ($site->children()->listed() as $subpage): ?>
        <li>
            <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
        </li>
    <?php endforeach ?>
</ul>

<div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
</div>