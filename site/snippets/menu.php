<header class="header">
    <nav class="header__menu nav-fade"> <?php // nav-scrolled ?>

        <?php // fablabLogo ?>
        <?php if ($logo = $site->fablabLogo()->toFile()): ?>
            <a class="header__logo logo" href="<?=$site->url()?>"><img class="header__logo__img" src="<?=$logo->url()?>" alt="Logo Fablab"></a>
        <?php endif;?>

<<<<<<< HEAD
        <!-- SNIPPET - PAGESLIST -->
        <?php snippet('pages-list') ?>
        <?php //snippet('pages-list2') ?>
=======
        <?php // SNIPPET - PAGESLIST ?>
        <?php snippet('pages-list2')?>
>>>>>>> 4d57f1b8b05432852a14406747883f23fc8b704a

        <a class="header__languagebutton" href="#">

            <?php // flagImage ?>
            <?php if ($flag = $site->flagImage()->toFile()): ?>
                <img class="header__languagebutton__flag" src="<?=$flag->url()?>" alt="logo Fablab">
            <?php endif;?>

            <span class="header__languagebutton__span">NL</span>
        </a>
    </nav>
</header>