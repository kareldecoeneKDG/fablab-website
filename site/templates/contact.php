<?php //SNIPPET - HEADER ?>
<?php snippet('header') ?>

    <div class="contact-container">

        <?php //SNIPPET - MENU WHITE ?>
        <?php snippet('menu-white') ?>

        <?php //CONTACT ?>
        <div class="contact-container__contact sectionOne">
            <div class="contact-container__contact__flexbox">
                <div class="contact-container__contact__flexbox__data">

                    <?php if($page->pageTitle()->isNotEmpty()): ?>
                        <h1 class="contact-container__contact__flexbox__title h1"><?= $page->pageTitle() ?></h1>
                    <?php endif; ?>

                    <?php if($page->address()->isNotEmpty()): ?>
                        <a class="contact-container__contact__flexbox__data__link" href="https://www.google.be/maps/place/Salesianenlaan+90,+2660+Antwerpen/@51.1732441,4.3693704,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3f150286bde31:0x540bf1fb6f744868!8m2!3d51.1732441!4d4.3715591" target="_blank"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i> <?= $page->address() ?></a>
                    <?php endif; ?>

                    <?php if($page->email()->isNotEmpty()): ?>
                        <a class="contact-container__contact__flexbox__data__link" href="mailto: <?= $page->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $page->email() ?></a>
                    <?php endif; ?>

                    <?php //SNIPPET - SOCIALS ?>
                    <div class="footer__content__block__socialsflexbox socials-grey">
                        <?php snippet('socials') ?>
                    </div>

                    <?php //TO RESERVE ?>
                    <div class="contact-container__reserve">

                        <?php if($page->reserveTitle()->isNotEmpty()): ?>
                            <h2 class="contact-container__reserve__title h2"><?= $page->reserveTitle() ?></h2>
                        <?php endif; ?>

                        <?php if($page->reserveText()->isNotEmpty()): ?>
                            <p class="contact-container__reserve__paragraph p">
                                <?= $page->reserveText() ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>



                <?php //CONTACTFORM ?>
                <div class="contact-container__contact__flexbox__contactform">

                    <?php //alert/succes message ?>
                    <?php if($success): ?>
                        <div class="alert success">
                            <p><?= $success ?></p>
                        </div>

                    <?php //error message ?>
                    <?php else: ?>
                        <?php if(isset($alert['error'])): ?>
                            <div><?= $alert['error'] ?></div>
                        <?php endif; ?>

                    <form class="contact-container__contact__flexbox__contactform__form" method="post" action="<?= $page->url() ?>">

                        <?php //honeypot for cybersecurity analysis? ?>
                        <div class="honeypot">
                            <label for="website">Website <abbr title="required">*</abbr></label>
                            <input type="url" id="website" name="website" tabindex="-1">
                        </div>

                        <div class="contact-container__contact__flexbox__contactform__form__flexbox">

                            <?php //name input ?>
                            <div class="contact-container__contact__flexbox__contactform__form__flexbox__box field">
                                <label class="contact-container__contact__flexbox__contactform__form__label" for="name">
                                    Naam
                                </label>
                                <input class="contact-container__contact__flexbox__contactform__form__input" type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
                                <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
                            </div>

                            <?php //email input ?>
                            <div class="contact-container__contact__flexbox__contactform__form__flexbox__box field">
                                <label class="contact-container__contact__flexbox__contactform__form__label" for="email">
                                    Email
                                </label>
                                <input class="contact-container__contact__flexbox__contactform__form__input" type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
                                <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
                            </div>
                        </div>

                        <?php //message textarea ?>
                        <div class="field">
                            <label class="contact-container__contact__flexbox__contactform__form__label" for="text">
                                Uw bericht
                            </label>
                            <textarea id="text" class="contact-container__contact__flexbox__contactform__form__input textarea" name="text" required>
                                <?= esc($data['text'] ?? '') ?>
                            </textarea>
                            <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
                        </div>

                        <input class="contact-container__contact__flexbox__contactform__form__submit button-small" type="submit" name="submit" value="Verzend">
                    </form>
                    <?php endif ?>
                </div>
            </div>
        </div>



        <?php //GENERAL INFO MARK + ESTHER ?>
        <div class="contact-container__general">

            <?php if($page->generalTitle()->isNotEmpty()): ?>
                <h2 class="contact-container__general__title h2"><?= $page->generalTitle() ?></h2>
            <?php endif; ?>

            <?php if($page->generalText()->isNotEmpty()): ?>
                <p class="contact-container__general__paragraph p">
                    <?= $page->generalText() //->markdown() ?>
                </p>
            <?php endif; ?>

            <div class="contact-container__general__flexbox">
            
                <?php //STRUCTURE FOR GETTING EMPLOYEES ?>
                <?php
                    // PUT ALL DATA OUT OF STRUCTURE IN ARRAY
                    $employees = $page->employees()->toStructure();

                    foreach ($employees as $employee):

                        // MAKE IMAGE OBJECT TO USE URL AS SOURCE
                        if($image = $employee->image()->toFile()):
                            $image = $employee->image()->toFile();
                        endif;
                ?>
                        <?php //EMPLOYEE ?>
                        <div class="contact-container__general__flexbox__left">

                            <?php if($image->url() !== ''): ?>
                                <img class="contact-container__general__flexbox__left__img img" src="<?= $image->url() ?>" alt="Employee FabLab profile picture">
                            <?php endif; ?>

                            <?php if($employee->name()->isNotEmpty()): ?>
                                <h3 class="contact-container__general__flexbox__left__title h3"><?= $employee->name() ?></h3>
                            <?php endif; ?>

                            <?php if($employee->function()->isNotEmpty()): ?>
                                <p class="contact-container__general__flexbox__left__function p"><?= $employee->function() ?></p>
                            <?php endif; ?>

                            <?php if($employee->tel()->isNotEmpty()): ?>
                                <a class="contact-container__general__flexbox__left__contact" href="tel: <?= $employee->tel() ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?= $employee->tel() ?></a>
                            <?php  endif; ?>

                            <?php if($employee->email()->isNotEmpty()): ?>
                                <a class="contact-container__general__flexbox__left__contact" href="mailto: <?= $employee->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?=$employee->email()?></a>
                            <?php endif; ?>
                        </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>



        <?php //ACCESSIBILITY ?>
        <?php snippet('accessibility') ?>



        <?php //GOOGLE MAPS ?>
        <div class="contact-container__maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.4688544650553!2d4.3684762157246455!3d51.17358087958172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f1fdd88dbf09%3A0xfb32da549e12cd0c!2sKdG%20FabLab!5e0!3m2!1snl!2sbe!4v1636013741241!5m2!1snl!2sbe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    
<?php //SNIPPET - FOOTER ?>
<?php snippet('footer') ?>

<?php //JAVASCRIPT TAB BAR ?>
<?= js('build/js/tabbar-accessibility.js') ?>