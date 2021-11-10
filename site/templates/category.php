<?php snippet('header') ?>
    <!-- BREADCRUMB -->
    <div class="breadcrumb" itemprop="breadcrumb">
        <?php foreach($site->breadcrumb() AS $crumb): ?>
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
    <p class="p"><?= $page->technologie()->html() ?></p>
    <?php foreach($page->images() as $image): ?>
        <figure>
            <a href="<?= $image->url() ?>">
            <img src="<?= $image->url() ?>" alt="">
            </a>
        </figure>
    <?php endforeach ?>
    <h2 class="h2">Beschikbare materialen</h2>
    <h2 class="h2">Design software</h2>
    <?= $page->designsoftware()->kt()?>
    <h2 class="h2">inspiratie</h2>
    <?= $page->Inspiratie()->kt() ?>
    <h2 class="h2">FabLab machines</h2>
    <ul>
        <?php foreach($page->children() as $subpage): ?>
        <li>
            <a href="<?= $subpage->url() ?>">
                <img src="<?= $subpage->image()->url()?>" alt="">
                <?= html($subpage->title()) ?>
                
            </a>
         </li>
         <?php endforeach ?>
    </ul>
    </section>   
<?php snippet('footer') ?>