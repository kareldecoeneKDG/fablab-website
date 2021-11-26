<?php //SNIPPET - HEADER ?>
<?php snippet('header')?>

<?php //SNIPPET - MENU WHITE ?>
<?php snippet('menu-white')?>



    <?php //BREADCRUMBS ?>
    <div class="breadcrumb sectionOne" itemprop="breadcrumb">
<<<<<<< HEAD
        <?php foreach($site->breadcrumb()->not('home') AS $crumb): ?>
=======
        <?php foreach ($site->breadcrumb()->not('home')->not('categories') as $crumb): ?>
>>>>>>> 4d57f1b8b05432852a14406747883f23fc8b704a
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
            <?php endif?>
        <?php endforeach?>
    </div>



   <?php //CATERGORY WRAPPER ?>
    <section class="category-wrapper">
        <h1 class="h1"><?=$page->title()->html()?></h1>

        <div class="category-wrapper__images-wrapper__text-wrapper">

            <?php //CATERGORY TEXT ?>
            <div class="category-wrapper__text-wrapper">
                <?php if ($page->info()->isNotEmpty()): ?>
                    <h2 class="h2">Algemene Info</h2>
                    <p class="p"><?=$page->info()?></p>
                <?php endif?>

                <?php if ($page->technologie()->isNotEmpty()): ?>
                    <h2 class="h2">Technologie</h2>
                    <p class="p"><?=$page->technologie()?></p>
                <?php endif?>
            </div>



            <?php //CATERGORY IMAGES ?>
            <?php if ($page->gallery()->isNotEmpty()): ?>
            <?php $images = $page->gallery()->toFiles();?>
                <div class="category-wrapper__images-wrapper">
                    <?php foreach ($images as $image): ?>
                        <img class="category-wrapper__images-wrapper__img img" src="<?=$image->url()?>" alt="<?=$image->alt()?>">
                    <?php endforeach?>
                </div>
            <?php endif;?>
        </div>



        <?php //CATERGORY MATERIALEN ?>
        <?php if ($page->materialen()->isNotEmpty()): ?>
            <div class="category-wrapper__materialen">
                <h2 class="category-wrapper__materialen h2">Beschikbare materialen</h2>
                <ul class="category-wrapper__materialen__list">
                    <?php foreach ($page->materialen()->split() as $materiaal): ?>
                        <li><?=$materiaal?></li>
                    <?php endforeach?>
                </ul>
                <a class="category-wrapper__materialen__price-list" href="<?php echo $pages->find('price-list')->url() ?>">Bekijk de prijslijst</a>
            </div>
        <?php endif?>



        <?php //CATERGORY DESIGN SOFTWARE ?>
        <?php if ($page->designsoftwaretext()->isNotEmpty()): ?>
            <div class="category-wrapper__designsoftware-wrapper">
                <h2 class="category-wrapper__designsoftware-wrapper h2">Design software</h2>
                <p class="category-wrapper__designsoftware-wrapper__paragraph p"><?=$page->designsoftwaretext()?></p>
            </div>
        <?php endif?>



        <?php //DESIGN SOFTWARE STRUCTURE ?>
        <?php $designsoftwareLinks = $page->designsoftwareLinks()->toStructure();?>
        <div class="category-wrapper__inspiration-links">
            <ul class="category-wrapper__inspiration-links__list">
                <?php foreach ($designsoftwareLinks as $link): ?>
                    <li class="category-wrapper__inspiration-links__list__item"><a href="<?=$link->url()?>"><?=$link->anchor()?></a></li>
                <?php endforeach;?>
            </ul>
        </div>



        <?php //DESIGN SOFTWARE STRUCTURE ?>
        <?php if ($page->InspirationLinks()->isNotEmpty()): ?>
            <?php $inspirationLinks = $page->InspirationLinks()->toStructure();?>
            <div class="category-wrapper__inspiration-links">
                <h2 class="category-wrapper__designsoftware-wrapper h2">Inspiratie</h2>
                <ul class="category-wrapper__inspiration-links__list">
                    <?php foreach ($inspirationLinks as $link): ?>
                        <li class="category-wrapper__inspiration-links__list__item"><a href="<?=$link->link()?>" target="_blank"><?=$link->anchor()?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        <?php endif;?>



        <?php //CATERGORY MACHINES LIST ?>
        <?php if ($page->children()->isNotEmpty()): ?>
            <div class="category-wrapper__machines-wrapper">
                <h2 class="category-wrapper__machines-wrapper__title h2">FabLab machines</h2>
                <ul class="category-wrapper__machines-wrapper__list">
                    <?php foreach ($page->children() as $subpage): ?>
                        <li class="category-wrapper__machines-wrapper__list__item">
                            <a class="category-wrapper__machines-wrapper__list__item__link"href="<?=$subpage->url()?>">
                                <img class="category-wrapper__machines-wrapper__list__item__link__img" src="<?=$subpage->image()->url()?>" alt="<?=$subpage->image()->alt()?>">

                                <div>
                                    <p class="category-wrapper__machines-wrapper__list__item__link__p p"><?=html($subpage->type())?></p>
                                    <h3 class="category-wrapper__machines-wrapper__list__item__link__title h3"><?=html($subpage->title())?></h3>
                                </div>
                            </a>
                        </li>
                    <?php endforeach?>
                </ul>
            </div>
        <?php endif?>



        <?php //CAROUSEL ?>
        <?php snippet('carousel')?>



        <div id="arrow-up-container" class="home-container__partnersflexbox">
            <div id="arrow-up-container-category" class="home-container__partnersflexbox__box">
                <div class="home-container__partnersflexbox__box__container">
                    <a class="home-container__partnersflexbox__box__container__link" href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>



<?php //SNIPPET - FOOTER ?>
<?php snippet('footer')?>

<?php //JAVASCRIPT RESPONSIVE NAV ?>
<?php //js('build/js/category-carousel.js') ?>