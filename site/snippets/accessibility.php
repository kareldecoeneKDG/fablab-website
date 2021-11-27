<?php
// Structure of accessibility items
$transportItems = $page->accessibility()->toStructure();
?>

<div class="contact-container__tabscontainer tabs-container">
    <h2 class="contact-container__title tabs-container__title h2">Bereikbaarheid</h2>

    <div class="contact-container__tabscontainer__tabs tabs">
        <div class="contact-container__tabscontainer__tabs__tabheader tab-header">

            <?php // Tabs ?>
            <div class="contact-container__tabscontainer__tabs__tabheader__item active">
                <i class="fa fa-bicycle" aria-hidden="true"></i>
            </div>
            <div class="contact-container__tabscontainer__tabs__tabheader__item">
                <i class="fa fa-train" aria-hidden="true"></i>
            </div>
            <div class="contact-container__tabscontainer__tabs__tabheader__item">
                <i class="fa fa-bus" aria-hidden="true"></i>
            </div>
            <div class="contact-container__tabscontainer__tabs__tabheader__item">
                <i class="fa fa-car" aria-hidden="true"></i>
            </div>
        </div>

        <div class="contact-container__tabscontainer__tabs__tabindicator tab-indicator"></div>

        <div class="contact-container__tabscontainer__tabs__tabbody tab-body">
            <?php foreach($transportItems as $item): ?>

                <?php // Tab bodies ?>
                <div class="contact-container__tabscontainer__tabs__tabbody__item">
                    <h3 class="contact-container__tabscontainer__tabs__tabbody__item__title h3"><?= $item->vehicle() ?></h3>
                    <p class="contact-container__tabscontainer__tabs__tabbody__item__paragraph p"><?= $item->description() ?></p>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>