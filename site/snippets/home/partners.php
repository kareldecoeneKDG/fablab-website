<div class="home-container__partners">
    <h2 class="home-container__partners__title h2">Partners</h2>

    <div class="flexbox-row">
        <?php
        // Photos partners KdG x Provincie Antwerp
        $featuredImages = $page->partners()->toFiles();

        foreach ($featuredImages as $img): ?>
            <img class="home-container__partners__img" src="<?=$img->url()?>" alt="<?=$img->alt()?>">
        <?php endforeach;?>
    </div>
</div>