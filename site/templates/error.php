<?php //SNIPPET - HEADER ?>
<?php snippet('header') ?>

<?php //SNIPPET - HEADER ?>
    <?php snippet('menu-white') ?>

    <div class="error-container">
        <div class="error-container__text-container">
            <h1 class="error-container__text-container__title h1">404 error</h1>
            <a class="error-container__text-container__link button-big" href="<?= $site->url() ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> home</a>
        </div>
    </div>

<?php //SNIPPET - FOOTER ?>
<?php snippet('footer') ?>