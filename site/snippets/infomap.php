<?php

    // Sitemap structure -> Array
    $infomap = $site->infoLinks()->toStructure();

    // Loop through links
    foreach ($infomap as $link): ?>
        <a class="footer__content__block__link" href="#"><?= $link->anchor() ?></a>
    <?php endforeach; ?>