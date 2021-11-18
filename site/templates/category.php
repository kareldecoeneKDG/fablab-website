<?php snippet('header') ?>

    <!-- SNIPPET - MENU -->
    <?php snippet('menu-white') ?>

    <!-- BREADCRUMBS -->
    <div class="breadcrumb sectionOne" itemprop="breadcrumb">
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
    </div>

   <!-- CONTENT -->

   <!-- CATERGORY WRAPPER -->
    <section class="category-wrapper">   
        <h1 class="h1"><?= $page->title()->html() ?></h1>

        
        <div class="category-wrapper__images-wrapper__text-wrapper">
            <!-- CATERGORY TEXT -->
            <div class="category-wrapper__text-wrapper">
                <?php if ($page->info()->isNotEmpty()): ?>
                    <h2 class="h2">Algemene Info</h2>
                    <p class="p"><?= $page->info()->html() ?></p>
                <?php endif ?>

                <?php if ($page->technologie()->isNotEmpty()): ?>
                    <h2 class="h2">Technologie</h2>
                    <p class="p"><?= $page->technologie()->html()?></p>
                <?php endif ?>
            </div>
            
            <!-- CATERGORY IMAGES -->
            <?php if ($page->images()->isNotEmpty()): ?>
                <div class="category-wrapper__images-wrapper">
                    <?php foreach($page->images() as $image): ?>
                        <img class="category-wrapper__images-wrapper__img img" src="<?= $image->url() ?>" >
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        </div>
        
        <!-- CATERGORY MATERIALEN -->
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

        <!-- CATERGORY DESIGN SOFTWARE -->
        <?php if ($page->designsoftware()->isNotEmpty()): ?>
            <div class="category-wrapper__designsoftware-wrapper">
                <h2 class="category-wrapper__designsoftware-wrapper h2">Design software</h2>
                <?= $page->designsoftware()->kt()?>
            </div>
        <?php endif ?>

        <!-- CATERGORY INSPIRATIE -->
        <?php if ($page->Inspiratie()->isNotEmpty()): ?>
            <div class="category-wrapper__inspiration-wrapper">
                <h2 class="category-wrapper__inspiration-wrapper h2">Inspiratie</h2>
                <?= $page->Inspiratie()->kt() ?>
            </div>
         <?php endif ?>
        
         <!-- CATERGORY MACHINES LIST -->
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

<!-- SNIPPET FOOTER -->
<?php snippet('footer') ?>