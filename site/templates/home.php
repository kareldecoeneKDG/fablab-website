<?php snippet('header') ?>

<?php snippet('menu') ?>



<div class="home-container">

    <?php //if background is set in panel use it as banner background image?>
    <?php if ($homeimg = $page->backgroundimg()->toFile()) : ?>
        <div class="home-banner" style="background-image: background-image: linear-gradient(white, transparent), url('<?= $homeimg->url() ?>')">
    <?php else : ?>
        <div class="home-banner" style="background-image: linear-gradient(white, transparent), url('assets/images/background.webp')">
    <?php endif; ?>



            <div class="home-animations">
                <div class="home-animations__container">
                    <div class="home-animations__container__typing-animation">
                        <div class="intro">
                            <h1 class="typing">something</h1>
                        </div>
                    </div>

                    <div class="home-animations__container__scroll-animation">
                        <a class="home-animations__container__scroll-animation__link" href="#messageSection">
                            <div class="home-animations__container__scroll-animation__link__arrowcontainer arrow">
                                <span class="home-animations__container__scroll-animation__link__arrowcontainer__arrow"></span>
                                <span class="home-animations__container__scroll-animation__link__arrowcontainer__arrow"></span>
                                <span class="home-animations__container__scroll-animation__link__arrowcontainer__arrow"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <?php //OPTIONAL MESSAGE FABLAB CLOSED ?>
        <section id="messageSection" class="message sectionOne">

            <?php if ($page->messageTitle()->isNotEmpty()) : ?>
                <h2 class="message__title h2"><?= $page->messageTitle() ?></h2>
            <?php endif; ?>

            <?php if ($page->messageText()->isNotEmpty()) : ?>
                <p class="message__paragraph p"><?= $page->messageText() ?></p>
            <?php endif; ?>
        </section>



        <?php snippet('home-content') ?>



        <?php snippet('tabbar-manufacturers') ?>



        <div class="home-container__partnersflexbox">

            <?php snippet('partners') ?>

            <div class="home-container__partnersflexbox__box">
                <div class="home-container__partnersflexbox__box__container">
                    <a class="home-container__partnersflexbox__box__container__link" href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>



<?php snippet('footer') ?>

<?= js('build/js/tabbar.js') ?>
<?= js('build/js/home-animation.js') ?>
<?= js('build/js/menuobserver.js') ?>