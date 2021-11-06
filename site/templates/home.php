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
        <h2 class="message__title">Title</h2>
        <p class="message__paragraph">Paragraph</p>
    </section>

    <!-- INTRODUCTION FABLAB -->
    <section class="introduction">
        <h2 class="introduction__title"><?= $page->title() ?></h2>

        <div class="introduction__flexbox">
            <div class="introduction__flexbox__left">
                <p class="introduction__flexbox__left__paragraph"><?= $page->WatIsEenFablab() ?></p>
                <a class="introduction__flexbox__left__button" href="#">Button</a>
            </div>

            <div class="introduction__flexbox__right">
                <div class="introduction__flexbox__right__openhours">
                    <h3 class="introduction__flexbox__right__openhours__title">Title</h3>
                    <p class="introduction__flexbox__right__openhours__paragraph">Uren</p>
                </div>

                <div class="introduction__flexbox__right__openhours">
                    <h3 class="introduction__flexbox__right__openhours__title">Title</h3>
                    <p class="introduction__flexbox__right__openhours__paragraph">Uren</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW DOES FABLAB WORK -->
    <section class="working">
        <h2 class="working__title">Title</h2>

        <div class="working__flexbox">
            <div class="working__flexbox__left">
                <p class="working__flexbox__left__paragraph"><?= $page->WerkingFablab() ?></p>

                <h3 class="working__flexbox__left__title"></h3>
                <p class="working__flexbox__left__paragraph">Paragraph</p>
            </div>

            <div class="working__flexbox__right">
                img
            </div>
        </div>
    </section>

    <!-- LINK BIOLAB -->
    <section class="biolab">
        <h2 class="biolab__title">Title</h2>

        <div class="biolab__flexbox">
            <div class="biolab__flexbox__left">
                <p class="biolab__flexbox__left__paragraph"><?= $page->Biolab()?></p>
                <a class="biolab__flexbox__left__button" href="#"></a>
            </div>

            <div class="working__flexbox__right">
                img
            </div>
        </div>
    </section>

    <!-- SNIPPET - PARTNERS -->
    <?php snippet('partners') ?>

<!-- SNIPPET FOOTER -->
<?php snippet('footer') ?>