<?php
    $manufacturersLogos = $page->logosManufacturers()->toFiles();
    $fablabLogos = $page->logoFablabs()->toFiles();
?>

<div class="tabs-container">
    <h2 class="tabs-container__title h2">Bereikbaarheid</h2>

    <div class="tabs">
        <div class="tab-header">
            <div class="active">
                Manufacturers
            </div>
            <div>
                Fablabs
            </div>
        </div>

        <div class="tab-indicator"></div>

        <div class="tab-body">
            <div>
                <?php foreach($manufacturersLogos as $image): ?>
                    <img src="<?= $image->url() ?>">
                <?php endforeach; ?>
            </div>
            <div>
                <?php foreach($fablabLogos as $img): ?>
                    <img src="<?= $img->url() ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>