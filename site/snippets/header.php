<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FabLab website</title>

        <!-- LOAD REACT -->
        <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
        <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

        <!-- STYLESHEETS -->
        <?= css('build/css/style.css') ?>
    </head>
    <body>
        <header class="header">
            <a class="header__logo" href="<?= $site->url() ?>">FABLAB LOGO</a>

            <nav class="header__menu">
                <?php snippet('pages-list') ?>
            </nav>

            <button class="header__languageButton">
                NL
            </button>
        </header>