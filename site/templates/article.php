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
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="../assets/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="../assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <header class="header">
            <nav class="header__menu">
                <a class="header__logo logo" href="<?= $site->url() ?>"><img class="header__logo__img" src="../assets/images/logo/fablab_logo.svg" alt="logo Fablab"></a>

                <?php snippet('pages-list') ?>

                <button class="header__languageButton">
                    NL
                </button>
            </nav>
        </header>

<section class="content-article">
  <article>
    <h1 class="h1"  ><?= $page->title()->html() ?></h1>
    <img src="<?= $page->image()->url()?>" alt="">
    <div style="display:flex; " class="share">
        <a  class="content-article__icon" href=""><i class="fa fa-share"></i></a>
        <h3>Delen</h3>
        <a href="#" class="facebook-button">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#" class="twitter-button">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#" class="whatsapp-button">
          <i class="fa fa-whatsapp"></i>
        </a>
    </div>
    <p class="p"><?= $page->text()?></p>
    <p class="p__date">Gepubliceerd op <?= $page->Date()->toDate('d-m-Y') ?></p>
  </article>
</section>
<section class="related-articles">
    <?php
    $related = $page->related()->toPages();
    if ($related->count() > 0):
    ?>
    <h2 class="h2">Gerelateerde blogposts</h2>
    <div class="blog-wrapper">
    <?php foreach($related as $article): ?>
    <article class="blog-wrapper__blog-overview">
       <img src="<?= $article->image()->url()?>" alt="">
       <h2 class="h2-related"><?= $article->title()->html() ?></h2>
    </article>
    <?php endforeach ?>
</div>
</section>
    <?php endif ?>
</section>
    
<footer class="footer">
            
            <!-- FLEXBOX -->
            <section class="footer__content">

                <!-- BLOCK -->
                <div class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer first-title h4">Contact</h4>

                    <!-- address -->
                    <?php if($site->address()->isNotEmpty()): ?>
                        <a class="footer__content__block__link" href="#"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i><?= $site->address() ?></a>
                    <?php endif; ?>

                    <!-- email -->
                    <?php if($site->email()->isNotEmpty()): ?>
                        <a class="footer__content__block__link footer__content__block__link-email" href="#"><i class="fa fa-envelope" aria-hidden="true"></i><?= $site->email() ?></a>
                    <?php endif; ?>

                    <!-- SNIPPET - SOCIALS -->
                    <div class="footer__content__block__socialsflexbox socials-white">
                        <?php snippet('socials') //snippet moet nog aangepast worden. ?>
                    </div>
                </div>

                <!-- BLOCK - DESKTOP LAYOUT SITEMAP -->
                <div id="sitemap-desktop" class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Navigatie</h4>
                    <a class="footer__content__block__link" href="#">Home</a>
                    <a class="footer__content__block__link" href="#">Machines</a>
                    <a class="footer__content__block__link" href="#">Reserveren</a>
                    <a class="footer__content__block__link" href="#">Blog</a>
                    <a class="footer__content__block__link" href="#">Contact</a>
                </div>

                <!-- BLOCK - DESKTOP LAYOUT PAGES -->
                <div id="pages-desktop" class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Info</h4>
                    <a class="footer__content__block__link" href="#">FAQ</a>
                    <a class="footer__content__block__link" href="#">Huisregels</a>
                    <a class="footer__content__block__link" href="./price-list">Prijslijst</a>
                    <a class="footer__content__block__link" href="#">Wat is FabLab</a>
                </div>

                <!-- BLOCK -->
                <div class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Openingsuren</h4>

                    <div class="footer__content__block__openhours">
                        <h5 class="footer__content__block__openhours__title h5-footer h5">KdG-medewerkers/studenten</h5>
                        <p class="footer__content__block__openhours__paragraph">ma - do: 9.00u - 17.00u</p>
                    </div>

                    <div class="footer__content__block__openhours">
                        <h5 class="footer__content__block__openhours__title h5-footer h5">Open lab momenten</h5>
                        <p class="footer__content__block__openhours__paragraph">woe - do: 13.00u - 17.00u</p>
                    </div>
                </div>

                <!-- BLOCK - MOBILE LAYOUT SITEMAP + PAGES -->
                <div class="footer__content__flexbox">
                    <div class="footer__content__flexbox__block">
                        <h4 class="footer__content__block__title h4-footer h4">Navigatie</h4>
                        <a class="footer__content__block__link" href="#">Home</a>
                        <a class="footer__content__block__link" href="#">Machines</a>
                        <a class="footer__content__block__link" href="#">Reserveren</a>
                        <a class="footer__content__block__link" href="#">Blog</a>
                        <a class="footer__content__block__link" href="#">Contact</a>
                    </div>

                    <div class="footer__content__flexbox__block">
                        <h4 class="footer__content__block__title h4-footer h4">Info</h4>
                        <a class="footer__content__block__link" href="#">FAQ</a>
                        <a class="footer__content__block__link" href="#">Huisregels</a>
                        <a class="footer__content__block__link" href="./price-list">Prijslijst</a>
                        <a class="footer__content__block__link" href="#">Wat is FabLab</a>
                    </div>
                </div>

                <!-- BLOCK -->
                <div class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Met steun van</h4>

                    <div class="footer__content__block__imageholder">
                        <img class="footer__content__block__imageholder__img" src="../assets/images/footer-kdg.webp" alt="KdG logo">
                    </div>

                    <div class="footer__content__block__imageholder">
                        <img class="footer__content__block__imageholder__img" src="../assets/images/footer-provincieA.webp" alt="Provincie Antwerpen logo">
                    </div>
                </div>
            </section>

            <!-- COPYRIGHT -->
            <section class="footer__copyright">
                &#169; 2021 FabLab KdG.
            </section>
        </footer>


        <!-- JAVASCRIPT RESPONSIVE NAV -->
        <?= js('build/js/app.js') ?>
        <?= js('build/js/sharebuttons.js') ?>
    </body>
</html>