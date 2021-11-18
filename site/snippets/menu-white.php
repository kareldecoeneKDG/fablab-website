<header class="header">
    <nav class="header__menu nav-scrolled">

        <!-- fablabLogo -->
        <?php if($logo = $site->fablabLogo()->toFile()): ?>
            <a class="header__logo logo" href="<?= $site->url() ?>"><img class="header__logo__img" src="<?= $logo->url() ?>" alt="logo Fablab"></a>
        <?php endif; ?>

        <?php snippet('pages-list2') ?>

        <a class="header__languagebutton" href="#">

            <!-- flagImage -->
            <?php if($flag = $site->flagImage()->toFile()): ?>
                <img class="header__languagebutton__flag" src="<?= $flag->url() ?>" alt="logo Fablab">
            <?php endif; ?>

            <!-- <img class="header__languagebutton__flag" src="assets/images/be.svg"> -->
            <span class="header__languagebutton__span">NL</span>
        </a>
    </nav>
</header>