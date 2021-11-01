<?php snippet('header') ?>

    <main class="main">
        <article>
            <h1><?= $page->title() ?></h1>

            <div class="machine-layout">
                <div class="machine-info">
                    <?php if ($page->text()->isNotEmpty()): ?>
                        <div class="project-text">
                            <?= $page->text() ?>
                        </div>
                    <?php endif ?>

                    <dl>
                        <?php if ($page->category()->isNotEmpty()): ?>
                            <dt>Category</dt>
                            <dd><?= $page->category() ?></dd>
                        <?php endif ?>

                        <?php if ($page->manufactur()->isNotEmpty()): ?>
                            <dt>Fabrikant</dt>
                            <dd><?= $page->manufactur() ?></dd>
                        <?php endif ?>

                        <?php if ($page->buildVolume()->isNotEmpty()): ?>
                            <dt>Build Volume</dt>
                            <dd><?= $page->buildVolume() ?></dd>
                        <?php endif ?>

                        <?php if ($page->nozzle()->isNotEmpty()): ?>
                            <dt>Nozzle</dt>
                            <dd><?= $page->nozzle() ?></dd>
                        <?php endif ?>

                        <?php if ($page->filament()->isNotEmpty()): ?>
                            <dt>Filament</dt>
                            <dd><?= $page->filament() ?></dd>
                        <?php endif ?>

                        <?php if ($page->layerHeights()->isNotEmpty()): ?>
                            <dt>Layer Heights</dt>
                            <dd><?= $page->layerHeights() ?></dd>
                        <?php endif ?>

                        <?php if ($page->layerResolution()->isNotEmpty()): ?>
                            <dt>Layer Resolution</dt>
                            <dd><?= $page->layerResolution() ?></dd>
                        <?php endif ?>

                        <?php if ($page->bed()->isNotEmpty()): ?>
                            <dt>Bed</dt>
                            <dd><?= $page->bed() ?></dd>
                        <?php endif ?>

                        <?php if ($page->supportedFileTypes()->isNotEmpty()): ?>
                            <dt>Supported File Types</dt>
                            <dd><?= $page->supportedFileTypes() ?></dd>
                        <?php endif ?>

                        <?php if ($page->software()->isNotEmpty()): ?>
                            <dt>Software</dt>
                            <dd><?= $page->software() ?></dd>
                        <?php endif ?>

                        <?php if ($page->manual()->isNotEmpty()): ?>
                            <dt>Manual</dt>
                            <dd><?= $page->manual() ?></dd>
                        <?php endif ?>

                        <?php if ($page->tutorial()->isNotEmpty()): ?>
                            <dt>Tutorial</dt>
                            <dd><?= $page->tutorial() ?></dd>
                        <?php endif ?>

                        <?php if ($page->creation()->isNotEmpty()): ?>
                            <dt>Creation</dt>
                            <dd><?= $page->creation() ?></dd>
                        <?php endif ?>
                    </dl>
                </div>
                <div class="machine-gallery">
                    <ul>
                        <?php foreach($page->images() as $image): ?>
                        <li>
                            <a href="<?= $image->url() ?>">
                                <?= $image->resize(1200, 1200) ?>
                            </a>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </article>
    </main>
    
<?php snippet('footer') ?>