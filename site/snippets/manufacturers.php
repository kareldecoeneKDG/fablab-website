<?php
$manufacturers = $page->manufacturers()->toStructure();
$fablabs = $page->fablabs()->toStructure();
?>

<div class="home-container__tabscontainer-manufacturer tabs-container-manufacturer">
    <div class="home-container__tabscontainer-manufacturer__tabs tabs-manufacturer">
        <div class="home-container__tabscontainer-manufacturer__tabs__tabheader tab-header-manufacturer">

            <div class="home-container__tabscontainer-manufacturer__tabs__tabheader__item active"> <?php // changed ?>
                Manufacturers
            </div>
            <div class="home-container__tabscontainer-manufacturer__tabs__tabheader__item">
                Fablabs
            </div>
        </div>

        <div class="home-container__tabscontainer-manufacturer__tabs__tabindicator tab-indicator-manufacturer"></div>

        <div class="home-container__tabscontainer-manufacturer__tabs__tabbody tab-body-manufacturer">

            <div class="home-container__tabscontainer-manufacturer__tabs__tabbody__item active">
                <?php foreach ($manufacturers as $manufacturer): ?>
                    <div>
                        <?php if ($manufacturerimage = $manufacturer->image()->toFile()): ?>
                            <a href="<?=$manufacturer->url()?>" rel="nofollow" target="_blank">
                                <img class="home-container__tabscontainer-manufacturer__tabs__tabbody__item__img" src="<?=$manufacturerimage->url()?>" alt="Logos manufacturers machines">
                            </a>
                        <?php endif;?>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="home-container__tabscontainer-manufacturer__tabs__tabbody__item">
                <?php foreach ($fablabs as $fablab): ?>
                    <div>
                        <?php if ($fablabimage = $fablab->image()->toFile()): ?>
                            <a href="<?=$fablab->url()?>" rel="nofollow" target="_blank">
                                <img class="home-container__tabscontainer-manufacturer__tabs__tabbody__item__img" src="<?=$fablabimage->url()?>" alt="Logos other fablabs">
                            </a>
                        <?php endif;?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>