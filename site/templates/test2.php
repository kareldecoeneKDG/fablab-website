<?php /*<section class="introduction">
            <?php if ($page->whatIsFablabTitle()->isNotEmpty()) : ?>
                <h2 class="introduction__title h2-home h2"><?= $page->whatIsFablabTitle() ?></h2>
            <?php endif; ?>



            <div class="flex-row-desktop">
                <div class="introduction__content">
                    <?php if ($page->whatIsFablabText()->isNotEmpty()) : ?>
                        <p class="introduction__content__paragraph p p-home"><?= $page->whatIsFablabText() ?></p>
                    <?php endif; ?>

                    <?php if ($page->whatIsFablabButtonText()->isNotEmpty()) : ?>
                        <a class="introduction__content__button button-small button-home" href="<?= $pages->find('what-is-fablab')->url() ?>"><?= $page->whatIsFablabButtonText() ?></a>
                    <?php endif; ?>
                </div>



                <div class="flex-column">
                    <div class="introduction__openhours">
                        <?php if ($page->openhoursKdGTitle()->isNotEmpty()) : ?>
                            <h3 class="introduction__openhours__title h3"><?= $page->openhoursKdGTitle() ?></h3>
                        <?php endif; ?>

                        <?php if ($page->openhoursKdGText()->isNotEmpty()) : ?>
                            <p class="introduction__openhours__paragraph p"><?= $page->openhoursKdGText() ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="introduction__openhours">
                        <?php if ($page->openhoursExternTitle()->isNotEmpty()) : ?>
                            <h3 class="introduction__openhours__title h3"><?= $page->openhoursExternTitle() ?></h3>
                        <?php endif; ?>

                        <?php if ($page->openhoursExternText()->isNotEmpty()) : ?>
                            <p class="introduction__openhours__paragraph p"><?= $page->openhoursExternText() ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section> */ ?>



            <?php /* //HOW DOES FABLAB WORK ?>
            <section class="home-container__working">

                <?php //WORKING FABLAB BANNER IMAGE MOBILE ?>
                <div class="home-container__working__banner banner-home">

                    <?php if ($page->workingFablabTitle()->isNotEmpty()) : ?>
                        <h2 class="home-container__working__banner__title h2-home h2"><?= $page->workingFablabTitle() ?></h2>
                    <?php endif; ?>
                </div>

                <div class="home-container__working__flexbox">
                    <div class="home-container__working__flexbox__left">

                        <?php if ($page->workingFablabText()->isNotEmpty()) : ?>
                            <p class="home-container__working__flexbox__left__paragraph p p-home"><?= $page->workingFablabText() ?></p>
                        <?php endif; ?>

                        <?php if ($page->workingFablabButtonText()->isNotEmpty()) : ?>
                            <a class="home-container__working__flexbox__left__button button-small button-home" href="<?= $pages->find('house-rules')->url() ?>"><?= $page->workingFablabButtonText() ?></a>
                        <?php endif; ?>
                    </div>

                    <?php //workingFablabImage DESKTOP ?>
                    <?php if ($img = $page->workingFablabImage()->toFile()) : ?>
                        <div class="home-container__working__flexbox__right">
                            <img class="home-container__working__flexbox__right__img home-img" src="<?= $img->url() ?>" alt="Picture of Mark in Fablab">
                        </div>
                    <?php endif; ?>
                </div>
            </section>



            <?php //LINK BIOLAB ?>
            <section class="home-container__biolab">

                <?php //BIOLAB BANNER IMAGE ?>
                <div class="home-container__biolab__banner banner-home">

                    <?php if ($page->biolabTitle()->isNotEmpty()) : ?>
                        <h2 class="home-container__biolab__banner__title h2-home h2"><?= $page->biolabTitle()->url() ?></h2>
                    <?php endif; ?>
                </div>

                <div class="home-container__biolab__flexbox">
                    <div class="home-container__biolab__flexbox__left">

                        <?php if ($page->biolabText()->isNotEmpty()) : ?>
                            <p class="home-container__biolab__flexbox__left__paragraph p p-home"><?= $page->biolabText() ?></p>
                        <?php endif; ?>

                        <?php if ($page->biolabButtonText()->isNotEmpty()) : ?>
                            <a class="home-container__biolab__flexbox__left__button button-small button-home" href="#"><?= $page->biolabButtonText() ?></a>
                        <?php endif; ?>
                    </div>

                    <?php //biolabImage DESKTOP ?>
                    <?php if ($img = $page->biolabImage()->toFile()) : ?>
                        <div class="home-container__biolab__flexbox__right">
                            <img class="home-container__biolab__flexbox__right__img home-img" src="<?= $img->url() ?>" alt="Picture of students in Biolab">
                        </div>
                    <?php endif; ?>
                </div>
            </section> */ ?>