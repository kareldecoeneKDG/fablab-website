<?php
    $transportItems = $page->accessibility()->toStructure();
?>

<div class="tabs-container">
    <h2 class="tabs-container__title h2">Bereikbaarheid</h2>

    <div class="tabs">
        <div class="tab-header">
            <div class="active">
                <i class="fa fa-bicycle" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-train" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-bus" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-car" aria-hidden="true"></i>
            </div>
        </div>

        <div class="tab-indicator"></div>

        <div class="tab-body">
            <?php foreach($transportItems as $item): ?>
                <div>
                    <h3 class="h3"><?= $item->vehicle() ?></h3>
                    <p class="p"><?= $item->description() ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>