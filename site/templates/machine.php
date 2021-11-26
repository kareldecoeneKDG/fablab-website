<?php //SNIPPET - HEADER ?>
<?php snippet('header')?>

    <?php //SNIPPET - MENU WHITE ?>
    <?php snippet('menu-white')?>



    <main class="container container-machine main">

        <?php //BREADCRUMBS ?>
        <div class="breadcrumb" itemprop="breadcrumb">
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



        <?php //CONTENT ?>

        <?php //MACHINE BANNER ?>
        <div class="machine-banner">
            <h1 class="machine-banner__title h1"><?=$page->title()?></h1>
            <a class="machine-banner__button button-small button-reserveer" href="#">Reserveer</a>
        </div>

        <?php //MACHINE CONTENT ?>
        <div class="machine-image-wrapper">
            <section class="machine-wrapper">

                <?php //MACHINE TABLE INFO ?>
                <table class="machine-wrapper__info">
                    <?php if ($page->manufactur()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Fabrikant</td>
                            <td><?=$page->manufactur()?></td>
                        </tr>
                    <?php endif?>

                    <?php if ($page->buildVolume()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Build Volume</td>
                            <td><?=$page->buildVolume()?></td>
                        </tr>
                    <?php endif?>

                    <?php if ($page->nozzle()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Nozzle</td>
                            <td><?=$page->nozzle()?></td>
                        </tr>
                    <?php endif?>

                    <?php if ($page->filament()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Filament</td>
                            <td><?=$page->filament()?></td>
                        </tr>
                    <?php endif?>

                    <?php if ($page->layerHeights()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Layer Heights</td>
                            <td><?=$page->layerHeights()?></td>
                        </tr>
                    <?php endif?>

                    <?php if ($page->layerResolution()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Layer Resolution</td>
                            <td><?=$page->layerResolution()?></td>
                        </tr>
                    <?php endif?>

                    <?php if ($page->bed()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Bed</td>
                            <td><?=$page->bed()?></td>
                        </tr>
                    <?php endif?>
                </table>



                <?php //MACHINE IMAGES ?>
                <?php if ($page->images()->isNotEmpty()): ?>
                    <img  class="machine-wrapper__img img" src="<?=$page->images()->first()->url()?>" alt="<?=$page->images()->first()->alt()?>">
                <?php endif?>

                <?php //MACHINE FILETYPES ?>
                <?php if ($page->filetypes()->isNotEmpty()): ?>
                    <div class="machine-wrapper__file-types">
                        <h2 class="machine-wrapper__file-types_title h2">
                            Supported File Types
                        </h2>
                        <p class="machine-wrapper__file-types_p p"><?=$page->filetypes()?></p>
                    </div>
                <?php endif?>



                <?php //MACHINE MANUALS ?>
                <?php if ($page->documents()->filterBy('extension', 'pdf')->isNotEmpty()): ?>
                    <div class="machine-wrapper__manual-wrapper">
                        <h2 class="machine-wrapper__manual-wrapper__title h2">Handleiding</h2>
                        <ul class="machine-wrapper__manual-wrapper__list">
                            <?php foreach ($page->documents()->filterBy('extension', 'pdf') as $pdf): ?>
                                <li class="machine-wrapper__manual-wrapper__list__item">
                                    <a class="machine-wrapper__manual-wrapper__list__item__link" href="<?=$pdf->url()?>" target="_blank">
                                        <?=$pdf->filename()?> / PDF
                                    </a>
                                </li>
                            <?php endforeach?>
                        </ul>
                    </div>
                <?php endif?>



                <?php //MACHINE TUTORIALS ?>
                <?php if ($page->tutorials()->isNotEmpty()): ?>
                    <div class="machine-wrapper__tutorial-wrapper">
                        <h2 class="machine-wrapper__tutorial-wrapper__title h2">Tutorials</h2>
                        <div class="machine-wrapper__tutorial-wrapper__video-wrapper">
                            <?php
// using the `toStructure()` method, we create a structure collection
$items = $page->tutorials()->toStructure();
// we can then loop through the entries and render the individual fields
foreach ($items as $item): ?>
                                <div class="machine-wrapper__tutorial-wrapper__video-wrapper__video">
                                    <?=youtube($item->url()->html())?>
                                    <h3 class="machine-wrapper__tutorial-wrapper__h3 h3"><?=$item->title()->html()?></h3>
                                </div>
                            <?php endforeach?>
                        </div>
                    </div>
                <?php endif?>
            </section>



            <?php //MACHINE IMAGE DESKTOP ?>
            <?php if ($page->images()->isNotEmpty()): ?>
                <img  class="machine-wrapper__img-desktop img" src="<?=$page->images()->first()->url()?>" alt="<?=$page->images()->first()->alt()?>">
            <?php endif?>
        </div>
    </main>



<?php //SNIPPET - FOOTER ?>
<?php snippet('footer')?>