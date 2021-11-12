<?php

    // Sitemap structure -> Array
    $sitemap = $site->navigationLinks()->toStructure();

    // Loop through links
    foreach ($sitemap as $link): ?>
        <a class="footer__content__block__link" href="<?= $link->page()->toPage()->url() ?>"><?= $link->anchor() ?></a>
    <?php endforeach; ?>