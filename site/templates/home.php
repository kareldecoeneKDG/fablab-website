<?php //SNIPPET - HEADER
?>
<?php snippet('header')?>

<div class="home-container">

    <?php //if background is set in panel use it as banner background image
?>
    <?php if ($homeimg = $page->backgroundimg()->toFile()): ?>
        <div class="home-container__banner-container" style="background-image: background-image: linear-gradient(white, transparent), url('<?=$homeimg->url()?>')">
    <?php else: ?>
        <div class="home-container__banner-container" style="background-image: linear-gradient(white, transparent), url('assets/images/background.webp')">
    <?php endif;?>

            <?php //SNIPPET - MENU ?>
            <?php snippet('menu')?>

            <?php //BANNER ?>
            <div class="home-container__banner">
                <div class="home-container__banner__background">

                    <div class="home-container__banner__background__animation">
                        <div class="intro">
                            <h1 class="typing">something</h1>
                        </div>
                    </div>

                    <div class="home-container__banner__background__scroll">
                        <a class="home-container__banner__background__scroll__link" href="#messageSection">
                            <div class="home-container__banner__background__scroll__link__arrowcontainer arrow">
                                <span class="home-container__banner__background__scroll__link__arrowcontainer__arrow"></span>
                                <span class="home-container__banner__background__scroll__link__arrowcontainer__arrow"></span>
                                <span class="home-container__banner__background__scroll__link__arrowcontainer__arrow"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <?php //OPTIONAL MESSAGE FABLAB CLOSED ?>
            <section id="messageSection" class="home-container__message sectionOne">

            <?php //MESSAGE TITLE ?>
                <?php if ($page->messageTitle()->isNotEmpty()): ?>
                    <h2 class="home-container__message__title h2"><?=$page->messageTitle()?></h2>
                <?php endif;?>

            <?php //MESSAGE TEXT ?>
                <?php if ($page->messageText()->isNotEmpty()): ?>
                    <p class="home-container__message__paragraph p"><?=$page->messageText() //->markdown() ?></p>
                <?php endif;?>
            </section>



            <?php //INTRODUCTION FABLAB ?>
            <section class="home-container__introduction">

                <?php //whatIsFablabTitle ?>
                <?php if ($page->whatIsFablabTitle()->isNotEmpty()): ?>
                    <h2 class="home-container__introduction__title h2-home h2"><?=$page->whatIsFablabTitle()?></h2>
                <?php endif;?>

                <div class="home-container__introduction__flexbox">
                    <div class="home-container__introduction__flexbox__left">

                        <?php //whatIsFablabText ?>
                        <?php if ($page->whatIsFablabText()->isNotEmpty()): ?>
                            <p class="home-container__introduction__flexbox__left__paragraph p p-home"><?=$page->whatIsFablabText() //->markdown()
?></p>
                        <?php endif;?>

                        <?php //whatIsFablabButtonText ?>
                        <?php if ($page->whatIsFablabButtonText()->isNotEmpty()): ?>
                            <a class="home-container__introduction__flexbox__left__button button-small button-home" href="<?=$pages->find('what-is-fablab')->url()?>"><?=$page->whatIsFablabButtonText()?></a>
                        <?php endif;?>
                    </div>

                    <div class="home-container__introduction__flexbox__right">
                        <div class="home-container__introduction__flexbox__right__openhours">

                            <?php //openhoursKdGTitle ?>
                            <?php if ($page->openhoursKdGTitle()->isNotEmpty()): ?>
                                <h3 class="home-container__introduction__flexbox__right__openhours__title h3"><?=$page->openhoursKdGTitle()?></h3>
                            <?php endif;?>

                            <?php //openhoursKdGText ?>
                            <?php if ($page->openhoursKdGText()->isNotEmpty()): ?>
                                <p class="home-container__introduction__flexbox__right__openhours__paragraph p"><?=$page->openhoursKdGText()?></p>
                            <?php endif;?>
                        </div>

                        <div class="home-container__introduction__flexbox__right__openhours">

                            <?php //openhoursExternTitle ?>
                            <?php if ($page->openhoursExternTitle()->isNotEmpty()): ?>
                                <h3 class="home-container__introduction__flexbox__right__openhours__title h3"><?=$page->openhoursExternTitle()?></h3>
                            <?php endif;?>

                            <?php //openhoursExternText ?>
                            <?php if ($page->openhoursExternText()->isNotEmpty()): ?>
                                <p class="home-container__introduction__flexbox__right__openhours__paragraph p"><?=$page->openhoursExternText()?></p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </section>



            <?php //HOW DOES FABLAB WORK ?>
            <section class="home-container__working">

                <?php //WORKING FABLAB BANNER IMAGE ?>
                <div class="home-container__working__banner banner-home">

                    <?php //workingFablabTitle ?>
                    <?php if ($page->workingFablabTitle()->isNotEmpty()): ?>
                        <h2 class="home-container__working__banner__title h2-home h2"><?=$page->workingFablabTitle()?></h2>
                    <?php endif;?>
                </div>

                <div class="home-container__working__flexbox">
                    <div class="home-container__working__flexbox__left">

                        <?php //workingFablabText ?>
                        <?php if ($page->workingFablabText()->isNotEmpty()): ?>
                            <p class="home-container__working__flexbox__left__paragraph p p-home"><?=$page->workingFablabText() //->markdown()
?></p>
                        <?php endif;?>

                        <?php //workingFablabButtonText ?>
                        <?php if ($page->workingFablabButtonText()->isNotEmpty()): ?>
                            <a class="home-container__working__flexbox__left__button button-small button-home" href="<?=$pages->find('house-rules')->url()?>"><?=$page->workingFablabButtonText()?></a>
                        <?php endif;?>
                    </div>

                    <?php //workingFablabImage DESKTOP ?>
                    <?php if ($img = $page->workingFablabImage()->toFile()): ?>
                        <div class="home-container__working__flexbox__right">
                            <img class="home-container__working__flexbox__right__img" src="<?=$img->url()?>" alt="Picture of Mark in Fablab">
                        </div>
                    <?php endif;?>
                </div>
            </section>



            <?php //LINK BIOLAB ?>
            <section class="home-container__biolab">

                <?php //BIOLAB BANNER IMAGE ?>
                <div class="home-container__biolab__banner banner-home">

                    <?php //biolabTitle ?>
                    <?php if ($page->biolabTitle()->isNotEmpty()): ?>
                        <h2 class="home-container__biolab__banner__title h2-home h2"><?=$page->biolabTitle()->url()?></h2>
                    <?php endif;?>
                </div>

                <div class="home-container__biolab__flexbox">
                    <div class="home-container__biolab__flexbox__left">

                        <?php //biolabText ?>
                        <?php if ($page->biolabText()->isNotEmpty()): ?>
                            <p class="home-container__biolab__flexbox__left__paragraph p p-home"><?=$page->biolabText() //->markdown()
?></p>
                        <?php endif;?>

                        <?php //biolabButtonText ?>
                        <?php if ($page->biolabButtonText()->isNotEmpty()): ?>
                            <a class="home-container__biolab__flexbox__left__button button-small button-home" href="#"><?=$page->biolabButtonText()?></a>
                        <?php endif;?>
                    </div>

                    <?php //biolabImage DESKTOP ?>
                    <?php if ($img = $page->biolabImage()->toFile()): ?>
                        <div class="home-container__biolab__flexbox__right">
                            <img class="home-container__biolab__flexbox__right__img" src="<?=$img->url()?>" alt="Picture of students in Biolab">
                        </div>
                    <?php endif;?>
                </div>
            </section>



            <?php //SNIPPET - MANUFACTURERES ?>
            <?php snippet('manufacturers')?>



            <div class="home-container__partnersflexbox">

                <?php //SNIPPET - PARTNERS ?>
                <?php snippet('partners')?>

                <div class="home-container__partnersflexbox__box">
                    <div class="home-container__partnersflexbox__box__container">
                        <a class="home-container__partnersflexbox__box__container__link" href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

    <?php //SNIPPET FOOTER ?>
    <?php snippet('footer')?>

    <?php //JAVASCRIPT TAB BAR ?>
    <?=js('build/js/tabbar-manufacturers.js')?>

    <?php //JAVASCRIPT TAB BAR ?>
    <?=js('build/js/home-animation.js')?>

    <?php //JAVASCRIPT RESPONSIVE NAV ?>
    <?=js('build/js/menuobserver.js')?>