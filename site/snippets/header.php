<!DOCTYPE html>
<html lang="en">
    <head>
        <?php // STANDARD META TAGS ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php // PAGE TITLE ?>
        <title><?php $page->title()?></title>

        <?php // LOAD REACT ?>
        <?php // Note: when deploying, replace "development.js" with "production.min.js". ?>
        <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

        <?php // FONTS - GET PROXIMA NOVA FROM MARK ?>
        <link rel="stylesheet" href="https://use.typekit.net/zxe6lkl.css">

        <?php // FONT AWESOME ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php // STYLESHEETS ?>
        <?= css('build/css/style.css') ?>

        <?php // FAVICONS ?>
        <?php if ($site->faviconApple()->isNotEmpty()): ?>
            <?php if ($faviconApple = $site->faviconApple()->toFile()): ?>
                <link rel="apple-touch-icon" sizes="180x180" href="<?php $faviconApple->url()?>">
            <?php endif;?>
        <?php endif;?>

        <link rel="icon" type="image/png" sizes="32x32" href="https://fablab.karel.decoene.nxtmediatech.eu/favicon-32x32.png">
        <link rel="manifest" href="assets/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <?php // SOCIAL MEDIA PREVIEWS ?>
        <meta property="og:url" content="https://fablab.karel.decoene.nxtmediatech.eu">
        <meta property="og:type" content="website">
        <meta property="og:title" content="KdG FabLab - Make | Share | Learn">
        <meta property="og:description" content="Het KdG FabLab is een maakplaats voor iedereen. Komt gerust een keer langs tijdens onze openingsuren!">
        <meta property="og:image" content="https://fablab.karel.decoene.nxtmediatech.eu/assets/images/previewimages/facebook-preview-image.png">

        <?php // TWITTER ?>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="KdG FabLab - Make | Share | Learn" />
        <meta name="twitter:site" content="fablabkareldecoenenxtmediatecheu" />
        <meta name="twitter:creator" content="fablabkdg">
    </head>
    <body>