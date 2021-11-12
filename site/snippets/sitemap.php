<?php

    // Sitemap structure -> Array
    //<?= $link->pages()->url() ?
    $sitemap = $site->navigationLinks()->toStructure();
    
    // Loop through links
    foreach ($sitemap as $link): ?>
<<<<<<< HEAD
        <a class="footer__content__block__link" href="<?= $link->page()->toPage()->url() ?>"><?= $link->anchor() ?></a>
=======
        <a class="footer__content__block__link" href="<?=$link->pages()->url()?>"><?= $link->anchor() ?></a>
        
>>>>>>> 4541d7b22a121db8aea5209f0bfc4f62af24bb0b
    <?php endforeach; ?>