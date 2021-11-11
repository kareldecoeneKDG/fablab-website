<div class="home-container__partners">
    <h2 class="home-container__partners__title h2">Partners</h2>

    <?php
        // Photos partners KdG x Provincie Antwerp
        $featuredImages = $page->partners()->toFiles();

        foreach($featuredImages as $img): ?>
            <img class="home-container__partners__img" src="<?= $img->url() ?>" alt="Logo partners">
        <?php endforeach; ?>
</div>