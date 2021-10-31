<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- STANDARD META TAGS -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- PAGE TITLE -->
        <title><?= $page->title() ?></title>

        <!-- LOAD REACT -->
        <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
        <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

        <!-- FONTS - GET PROXIMA NOVA FROM MARK -->
        <link rel="stylesheet" href="https://use.typekit.net/zxe6lkl.css">

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- STYLESHEETS -->
        <?= css('build/css/style.css') ?>

        <!-- FAVICONS -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

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