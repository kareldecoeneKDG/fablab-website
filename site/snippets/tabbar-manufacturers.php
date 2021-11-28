<?php
$manufacturers = $page->manufacturers()->toStructure();
$fablabs = $page->fablabs()->toStructure();
?>

<div class="tabscontainer home-tabscontainer">
    <div class="tabscontainer__tabs">
        <div class="tabscontainer__tabs__tabheader">
            <div class="tabscontainer__tabs__tabheader__item active">
                Manufacturers
            </div>
            <div class="tabscontainer__tabs__tabheader__item">
                Fablabs
            </div>
        </div>



        <div class="tabscontainer__tabs__tabindicatorhome tabindicator"></div>



        <div class="tabscontainer__tabs__tabbody">
            <div class="tabscontainer__tabs__tabbody__item">
                <?php foreach ($manufacturers as $manufacturer): ?>
                    <div>
                        <?php if ($manufacturerimage = $manufacturer->image()->toFile()): ?>
                            <a href="<?=$manufacturer->url()?>" rel="nofollow" target="_blank">
                                <img class="tabscontainer__tabs__tabbody__item__img" src="<?= $manufacturerimage->url() ?>" alt="Logo manufacturer machines">
                            </a>
                        <?php endif;?>
                    </div>
                <?php endforeach;?>
            </div>

            <div class="tabscontainer__tabs__tabbody__item">
                <?php foreach ($fablabs as $fablab): ?>
                    <div>
                        <?php if ($fablabimage = $fablab->image()->toFile()): ?>
                            <a href="<?=$fablab->url()?>" rel="nofollow" target="_blank">
                                <img class="tabscontainer__tabs__tabbody__item__img" src="<?=$fablabimage->url()?>" alt="Logo other fablab">
                            </a>
                        <?php endif;?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>