<!-- SNIPPET - HEADER -->
<?php snippet('header') ?>

    <!-- BANNER -->
    <div class="banner">
        <div class="banner__background">
            background-img

            <div class="banner__background__animation">
                animation
            </div>

            <div class="banner__background__scroll">
                scroll
            </div>
        </div>
    </div>



    <!-- OPTIONAL MESSAGE FABLAB CLOSED -->
    <section class="message">

        <!-- messageTitle -->
        <?php if($page->messageTitle()->isNotEmpty()): ?>
            <h2 class="message__title"><?= $page->messageTitle() ?></h2>
        <?php endif; ?>

        <!-- messageText -->
        <?php if($page->messageText()->isNotEmpty()): ?>
            <p class="message__paragraph"><?= $page->messageText() ?></p>
        <?php endif; ?>
    </section>



    <!-- INTRODUCTION FABLAB -->
    <section class="introduction">

        <!-- whatIsFablabTitle -->
        <?php if($page->whatIsFablabTitle()->isNotEmpty()): ?>
            <h2 class="introduction__title"><?= $page->whatIsFablabTitle() ?></h2>
        <?php endif; ?>

        <div class="introduction__flexbox">
            <div class="introduction__flexbox__left">

                <!-- whatIsFablabText -->
                <?php if($page->whatIsFablabText()->isNotEmpty()): ?>
                    <p class="introduction__flexbox__left__paragraph"><?= $page->whatIsFablabText() ?></p>
                <?php endif; ?>

                <!-- whatIsFablabButtonText -->
                <?php if($page->whatIsFablabButtonText()->isNotEmpty()): ?>
                    <a class="introduction__flexbox__left__button" href="#"><?= $page->whatIsFablabButtonText() ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <?php endif; ?>
            </div>

            <div class="introduction__flexbox__right">
                <div class="introduction__flexbox__right__openhours">

                    <!-- openhoursKdGTitle -->
                    <?php if($page->openhoursKdGTitle()->isNotEmpty()): ?>
                        <h3 class="introduction__flexbox__right__openhours__title"><?= $page->openhoursKdGTitle() ?></h3>
                    <?php endif; ?>

                    <!-- openhoursKdGText -->
                    <?php if($page->openhoursKdGText()->isNotEmpty()): ?>
                        <p class="introduction__flexbox__right__openhours__paragraph"><?= $page->openhoursKdGText() ?></p>
                    <?php endif; ?>
                </div>

                <div class="introduction__flexbox__right__openhours">

                    <!-- openhoursExternTitle -->
                    <?php if($page->openhoursExternTitle()->isNotEmpty()): ?>
                        <h3 class="introduction__flexbox__right__openhours__title"><?= $page->openhoursExternTitle() ?></h3>
                    <?php endif; ?>

                    <!-- openhoursExternText -->
                    <?php if($page->openhoursExternText()->isNotEmpty()): ?>
                        <p class="introduction__flexbox__right__openhours__paragraph"><?= $page->openhoursExternText() ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>



    <!-- HOW DOES FABLAB WORK -->
    <section class="working">

        <!-- workingFablabTitle -->
        <?php if($page->workingFablabTitle()->isNotEmpty()): ?>
            <h2 class="working__title"><?= $page->workingFablabTitle() ?></h2>
        <?php endif; ?>

        <div class="working__flexbox">
            <div class="working__flexbox__left">

                <!-- workingFablabText -->
                <?php if($page->workingFablabText()->isNotEmpty()): ?>
                    <p class="working__flexbox__left__paragraph"><?= $page->workingFablabText() ?></p>
                <?php endif; ?>

                <!-- workingFablabButtonText -->
                <?php if($page->workingFablabButtonText()->isNotEmpty()): ?>
                    <a class="working__flexbox__left__button" href="#"><?= $page->workingFablabButtonText() ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <?php endif; ?>
            </div>

            <!-- workingFablabImage -->
            <?php if($page->workingFablabImage()->isNotEmpty()): ?>
                <div class="working__flexbox__right">
                    <img src="<?= $page->workingFablabImage()->url() ?>" alt="Werking Fablab image">
                </div>
            <?php endif; ?>
        </div>
    </section>

    

    <!-- LINK BIOLAB -->
    <section class="biolab">

        <!-- biolabTitle -->
        <?php if($page->biolabTitle()->isNotEmpty()): ?>
            <h2 class="biolab__title"><?= $page->biolabTitle()->url() ?></h2>
        <?php endif; ?>

        <div class="biolab__flexbox">
            <div class="biolab__flexbox__left">

                <!-- biolabText -->
                <?php if($page->biolabText()->isNotEmpty()): ?>
                    <p class="biolab__flexbox__left__paragraph"><?= $page->biolabText()?></p>
                <?php endif; ?>

                <!-- biolabButtonText -->
                <?php if($page->biolabButtonText()->isNotEmpty()): ?>
                    <a class="biolab__flexbox__left__button" href="#"><?= $page->biolabButtonText()?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <?php endif; ?>
            </div>

            <div class="working__flexbox__right">

                <!-- biolabImage -->
                <?php if($page->biolabImage()->isNotEmpty()): ?>
                    <img src="<?= $page->biolabImage()->url() ?>" alt="Biolab image">
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- SNIPPET - PARTNERS -->
    <?php snippet('partners') ?>

<!-- SNIPPET FOOTER -->
<?php snippet('footer') ?>