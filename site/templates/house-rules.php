<?php //SNIPPET - HEADER ?>
<?php snippet('header') ?>

    <?php //SNIPPET - MENU WHITE ?>
    <?php snippet('menu-white') ?>

    <div class="house-rules-wrapper">
    <h1><?= $page->title() ?></h1>

    <p><?= $page->intro() ?></p>
    
    <p><?= $page->openingsuren() ?></p>

    <p><?= $page->aanmelden() ?></p>

    <p><?= $page->gebruikmachines() ?></p>

    <p><?= $page->ordenetheid() ?></p>

    <p><?= $page->machinekostmaterialen() ?></p>
    </div>

<?php //SNIPPET - FOOTER ?>
<?php snippet('footer') ?>