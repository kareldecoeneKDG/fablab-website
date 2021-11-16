<?php snippet('header') ?>

    <!-- BREADCRUMB -->
    <div class="breadcrumb" itemprop="breadcrumb">
        <?php foreach($site->breadcrumb()->not('home') AS $crumb): ?>
        <?php if ($crumb->isActive()): ?>
        <span typeof="v:Breadcrumb">
            <span class="breadcrumb_last" property="v:title">
            <?php echo $crumb->title() ?>
            </span>
        </span>
        <?php else: ?>
            <span typeof="v:Breadcrumb">
            <a href="<?php echo $crumb->url() ?>" rel="v:url" property="v:title">
                <?php echo $crumb->title() ?>
            </a>
            </span> &rsaquo;
        <?php endif ?>
        <?php endforeach ?>
    </span>
    </div>

   <!-- CONTENT -->

    <section class="category-wrapper">   
        <h1 class="h1"><?= $page->title()->html() ?></h1>
        <h2 class="h2">Algemene Info</h2>
        <p class="p"><?= $page->info()->html() ?></p>
        <h2 class="h2">Technologie</h2>
        
        <?php if ($page->technologie()->isNotEmpty()): ?>
            <p class="p"><?= $page->technologie()->html()?></p>
            <br>
            <p class="p">
            Neem contact met ons op via Fablab@kdg.be om te informeren naar verschillende kleuren, materialen en prijzen.
            </p>
        <?php endif ?>
        
        <?php if ($page->images()->isNotEmpty()): ?>
            <div class="category-wrapper__images-wrapper">
            <?php foreach($page->images() as $image): ?>
                <img class="category-wrapper__images-wrapper__img img" src="<?= $image->url() ?>" alt="Medewerker Fablab profielfoto">
            <?php endforeach ?>
            </div>
        <?php endif ?>

        <?php if ($page->materialen()->isNotEmpty()): ?>
            <div class="category-wrapper__materialen">
            <h2 class="category-wrapper__materialen h2">Beschikbare materialen</h2>
            <ul class="category-wrapper__materialen__list">
            <?php foreach($page->materialen()->split() as $materiaal): ?>
                <li><?= $materiaal?></li>
            <?php endforeach ?>
            </ul>
            <a class="category-wrapper__materialen__price-list" href="<?php echo $pages->find('price-list')->url() ?>">Bekijk de prijslijst</a>
            </div>
        <?php endif ?>

        <?php if ($page->designsoftware()->isNotEmpty()): ?>
            <div class="category-wrapper__designsoftware-wrapper">
            <h2 class="category-wrapper__designsoftware-wrapper h2">Design software</h2>
            <?= $page->designsoftware()->kt()?>
            </div>
        <?php endif ?>

        <?php if ($page->designsoftware()->isNotEmpty()): ?>
            <div class="category-wrapper__inspiration-wrapper">
            <h2 class="category-wrapper__inspiration-wrapper h2">Inspiratie</h2>
            <?= $page->Inspiratie()->kt() ?>
            </div>
            <?php endif ?>
        
        <?php if ($page->children()->isNotEmpty()): ?>
            <div class="category-wrapper__machines-wrapper">
            <h2 class="category-wrapper__machines-wrapper h2">FabLab machines</h2>
            <ul class="category-wrapper__machines-wrapper__list">
                <?php foreach($page->children() as $subpage): ?>
                <li class="category-wrapper__machines-wrapper__list__item">
                    <a class="category-wrapper__machines-wrapper__list__item__link"href="<?= $subpage->url() ?>">
                        <img class="category-wrapper__machines-wrapper__list__item__link__img" src="<?= $subpage->image()->url()?>" alt="">
                        <p class="category-wrapper__machines-wrapper__list__item__link__p p"><?= html($subpage->type()) ?></p>
                        <h3 class="category-wrapper__machines-wrapper__list__item__link__title h3"><?= html($subpage->title()) ?></h3>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
            </div>
        <?php endif ?>
    </section>   
<?php snippet('footer') ?>