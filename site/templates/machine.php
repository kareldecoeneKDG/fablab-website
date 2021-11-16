<?php snippet('header') ?>
    <main class="main">
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
        <section class="machine-wrapper">
            <div class="machine-wrapper__banner">
                <h1 class="machine-wrapper__banner__title h1"><?= $page->title() ?></h1>
                <a class="machine-wrapper__banner__button" href="#">Reserveer</a>
            </div>
            <table class="machine-wrapper__info">
                    <?php if ($page->manufactur()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Fabrikant</td>
                            <td><?= $page->manufactur() ?></td>
                        </tr>
                    <?php endif ?>

                    <?php if ($page->buildVolume()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Build Volume</td>
                            <td><?= $page->buildVolume() ?></td>
                        </tr>
                    <?php endif ?>

                    <?php if ($page->nozzle()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Nozzle</td>
                            <td><?= $page->nozzle() ?></td>
                        </tr>
                    <?php endif ?>

                    <?php if ($page->filament()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Filament</td>
                            <td><?= $page->filament() ?></td>
                        </tr>
                    <?php endif ?>

                    <?php if ($page->layerHeights()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Layer Heights</td>
                            <td><?= $page->layerHeights() ?></td>
                        </tr>
                    <?php endif ?>

                    <?php if ($page->layerResolution()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Layer Resolution</td>
                            <td><?= $page->layerResolution() ?></td>
                        </tr>
                    <?php endif ?>

                    <?php if ($page->bed()->isNotEmpty()): ?>
                        <tr class="machine-wrapper__info__row">
                            <td>Bed</td>
                            <td><?= $page->bed() ?></td>
                        </tr>
                    <?php endif ?>
            </table>

                    <img src="<?= $page->images()->first()->url()?>" alt="">
                        <?php if ($page->filetypes()->isNotEmpty()): ?>
                        <h2 class="h2">
                            Supported File Types
                        </h2> 
                        <p class="p"><?= $page->filetypes() ?></p>
                        <?php endif ?>

                        <?php if ($page->documents()->filterBy('extension', 'pdf')->isNotEmpty()): ?>
                            <h2 class="h2">Handleiding</h2>
                            <?php foreach($page->documents()->filterBy('extension', 'pdf') as $pdf): ?>
                                <li>
                                    <a href="<?= $pdf->url() ?>">
                                        <?= $pdf->filename() ?>                                     
                                    </a>
                                </li>
                            <?php endforeach ?>
                        <?php endif ?>

                        <?php if ($page->tutorials()->isNotEmpty()): ?>
                            <h2 class="h2">Tutorials</h2>
                            <?php 
                            // using the `toStructure()` method, we create a structure collection
                            $items = $page->tutorials()->toStructure();
                            // we can then loop through the entries and render the individual fields
                            foreach ($items as $item): ?>
                            <?= youtube($item->url()->html()) ?>
                            <p class="p"><?= $item->title()->kirbytext() ?></p>
                            <?php endforeach ?>
                        <?php endif ?>
        </section>
    </main>
    
<?php snippet('footer') ?>