<?php
    $manufacturersLogos = $page->logosManufacturers()->toFiles();
    $fablabLogos = $page->logoFablabs()->toFiles();
?>

<div class="tabs-container-manufacturer">
    <h2 class="tabs-container-manufactor__title h2">Bereikbaarheid</h2>

    <div class="tabs-manufacturer">
        <div class="tab-header-manufacturer">
            <div class="active-manufacturer">
                Manufacturers
            </div>
            <div>
                Fablabs
            </div>
        </div>

        <div class="tab-indicator-manufacturer"></div>

        <div class="tab-body-manufacturer">
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