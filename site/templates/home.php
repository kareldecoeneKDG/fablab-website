<!-- SNIPPET - HEADER -->
<?php snippet('header') ?>

    <div class="home-container">

        <!-- if background is set in panel use it as banner background image -->
        <?php if($homeimg = $page->backgroundimg()->toFile()): ?>
            <div class="home-container__banner-container" style="background-image: background-image: linear-gradient(white, transparent), url('<?= $homeimg->url() ?>')">
        <?php else: ?>
            <div class="home-container__banner-container" style="background-image: linear-gradient(white, transparent), url('assets/images/background.webp')">
        <?php endif; ?>

            <!-- SNIPPET - MENU -->
            <?php snippet('menu') ?>
        
            <!-- BANNER -->
            <div class="home-container__banner">
                <div class="home-container__banner__background">
            
                <!-- <div class="home-container__banner__background"> -->
                    <div class="home-container__banner__background__animation">
                        <div class="intro">
                            <h1 class="typing">something</h1>
                        </div>
                    </div>

                    <div class="home-container__banner__background__scroll">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>



        <!-- OPTIONAL MESSAGE FABLAB CLOSED -->
        <section class="home-container__message sectionOne">

            <!-- messageTitle -->
            <?php if($page->messageTitle()->isNotEmpty()): ?>
                <h2 class="home-container__message__title h2"><?= $page->messageTitle() ?></h2>
            <?php endif; ?>

            <!-- messageText -->
            <?php if($page->messageText()->isNotEmpty()): ?>
                <p class="home-container__message__paragraph p"><?= $page->messageText() ?></p>
            <?php endif; ?>
        </section>



        <!-- INTRODUCTION FABLAB -->
        <section class="home-container__introduction">

            <!-- whatIsFablabTitle -->
            <?php if($page->whatIsFablabTitle()->isNotEmpty()): ?>
                <h2 class="home-container__introduction__title h2-home h2"><?= $page->whatIsFablabTitle() ?></h2>
            <?php endif; ?>

            <div class="home-container__introduction__flexbox">
                <div class="home-container__introduction__flexbox__left">

                    <!-- whatIsFablabText -->
                    <?php if($page->whatIsFablabText()->isNotEmpty()): ?>
                        <p class="home-container__introduction__flexbox__left__paragraph p p-home"><?= $page->whatIsFablabText() ?></p>
                    <?php endif; ?>

                    <!-- whatIsFablabButtonText -->
                    <?php if($page->whatIsFablabButtonText()->isNotEmpty()): ?>
                        <a class="home-container__introduction__flexbox__left__button button-small button-home" href="#"><?= $page->whatIsFablabButtonText() ?></a>
                    <?php endif; ?>
                </div>

                <div class="home-container__introduction__flexbox__right">
                    <div class="home-container__introduction__flexbox__right__openhours">

                        <!-- openhoursKdGTitle -->
                        <?php if($page->openhoursKdGTitle()->isNotEmpty()): ?>
                            <h3 class="home-container__introduction__flexbox__right__openhours__title h3"><?= $page->openhoursKdGTitle() ?></h3>
                        <?php endif; ?>

                        <!-- openhoursKdGText -->
                        <?php if($page->openhoursKdGText()->isNotEmpty()): ?>
                            <p class="home-container__introduction__flexbox__right__openhours__paragraph p"><?= $page->openhoursKdGText() ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="home-container__introduction__flexbox__right__openhours">

                        <!-- openhoursExternTitle -->
                        <?php if($page->openhoursExternTitle()->isNotEmpty()): ?>
                            <h3 class="home-container__introduction__flexbox__right__openhours__title h3"><?= $page->openhoursExternTitle() ?></h3>
                        <?php endif; ?>

                        <!-- openhoursExternText -->
                        <?php if($page->openhoursExternText()->isNotEmpty()): ?>
                            <p class="home-container__introduction__flexbox__right__openhours__paragraph p"><?= $page->openhoursExternText() ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>



        <!-- HOW DOES FABLAB WORK -->
        <section class="home-container__working">

            <!-- WORKING FABLAB BANNER IMAGE -->
            <div class="home-container__working__banner">

                <!-- workingFablabTitle -->
                <?php if($page->workingFablabTitle()->isNotEmpty()): ?>
                    <h2 class="home-container__working__banner__title h2-home h2"><?= $page->workingFablabTitle() ?></h2>
                <?php endif; ?>
            </div>

            <div class="home-container__working__flexbox">
                <div class="home-container__working__flexbox__left">

                    <!-- workingFablabText -->
                    <?php if($page->workingFablabText()->isNotEmpty()): ?>
                        <p class="home-container__working__flexbox__left__paragraph p p-home"><?= $page->workingFablabText() ?></p>
                    <?php endif; ?>

                    <!-- workingFablabButtonText -->
                    <?php if($page->workingFablabButtonText()->isNotEmpty()): ?>
                        <a class="home-container__working__flexbox__left__button button-small button-home" href="house-rules"><?= $page->workingFablabButtonText() ?></a>
                    <?php endif; ?>
                </div>

                <!-- workingFablabImage DESKTOP-->
                <?php if($img = $page->workingFablabImage()->toFile()): ?>
                    <div class="home-container__working__flexbox__right">
                        <img class="home-container__working__flexbox__right__img" src="<?= $img->url() ?>" alt="Foto Mark in Fablab">
                    </div>
                <?php endif; ?>
            </div>
        </section>

        

        <!-- LINK BIOLAB -->
        <section class="home-container__biolab">

            <!-- BIOLAB BANNER IMAGE -->
            <div class="home-container__biolab__banner">

                <!-- biolabTitle -->
                <?php if($page->biolabTitle()->isNotEmpty()): ?>
                    <h2 class="home-container__biolab__banner__title h2-home h2"><?= $page->biolabTitle()->url() ?></h2>
                <?php endif; ?>
            </div>

            <div class="home-container__biolab__flexbox">
                <div class="home-container__biolab__flexbox__left">

                    <!-- biolabText -->
                    <?php if($page->biolabText()->isNotEmpty()): ?>
                        <p class="home-container__biolab__flexbox__left__paragraph p p-home"><?= $page->biolabText()?></p>
                    <?php endif; ?>

                    <!-- biolabButtonText -->
                    <?php if($page->biolabButtonText()->isNotEmpty()): ?>
                        <a class="home-container__biolab__flexbox__left__button button-small button-home" href="#"><?= $page->biolabButtonText()?></a>
                    <?php endif; ?>
                </div>

                <!-- biolabImage DESKTOP -->
                <?php if($img = $page->biolabImage()->toFile()): ?>
                    <div class="home-container__biolab__flexbox__right">
                        <img class="home-container__biolab__flexbox__right__img" src="<?= $img->url() ?>" alt="Foto studenten in Biolab">
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- SNIPPET - MANUFACTURERES -->
        <?php snippet('manufacturers') ?>

        <div class="home-container__partnersflexbox">

            <!-- SNIPPET - PARTNERS -->
            <?php snippet('partners') ?>

            <div class="home-container__partnersflexbox__box">
                <div class="home-container__partnersflexbox__box__container">
                    <a class="home-container__partnersflexbox__box__container__link" href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

<!-- SNIPPET FOOTER -->
<?php snippet('footer') ?>

<!-- JAVASCRIPT TAB BAR -->
<?= js('build/js/tabbar-manufacturers.js') ?>

<!-- JAVASCRIPT TAB BAR -->
<?= js('build/js/home-animation.js') ?>