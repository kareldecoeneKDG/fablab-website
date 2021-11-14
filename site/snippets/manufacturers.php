<?php
    // Logos manufacturers
    $manufacturersLogos = $page->logosManufacturers()->toFiles();

    // Logos fablabs
    $fablabLogos = $page->logoFablabs()->toFiles();
?>

<div class="home-container__tabscontainer-manufacturer tabs-container-manufacturer">
    <div class="home-container__tabscontainer-manufacturer__tabs tabs-manufacturer">
        <div class="home-container__tabscontainer-manufacturer__tabs__tabheader tab-header-manufacturer">

            <!-- Tabs -->
            <div class="home-container__tabscontainer-manufacturer__tabs__tabheader__item active"> <!-- changed -->
                Manufacturers
            </div>
            <div class="home-container__tabscontainer-manufacturer__tabs__tabheader__item">
                Fablabs
            </div>
        </div>

        <div class="home-container__tabscontainer-manufacturer__tabs__tabindicator tab-indicator-manufacturer"></div>

        <div class="home-container__tabscontainer-manufacturer__tabs__tabbody tab-body-manufacturer">
            
            <!-- Tab bodies -->
            <div class="home-container__tabscontainer-manufacturer__tabs__tabbody__item active">
                <?php foreach($manufacturersLogos as $image): ?>
                    <div>
                        <img class="home-container__tabscontainer-manufacturer__tabs__tabbody__item__img" src="<?= $image->url() ?>" alt="Logos fabrikanten machines">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="home-container__tabscontainer-manufacturer__tabs__tabbody__item">
                <?php foreach($fablabLogos as $img): ?>
                    <div>
                        <img class="home-container__tabscontainer-manufacturer__tabs__tabbody__item__img" src="<?= $img->url() ?>" alt="Logos andere fablabs">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>