<!-- SNIPPET HEADER -->
<?php snippet('header') ?>
    <div class="contact-container">

        <!-- CONTACT -->
        <div class="contact-container__contact">
            <div class="contact-container__contact__flexbox">
                <div class="contact-container__contact__flexbox__data">

                    <!-- pageTitle -->
                    <?php if($page->pageTitle()->isNotEmpty()): ?>
                        <h1 class="contact-container__contact__flexbox__title h1"><?= $page->pageTitle() ?></h1>
                    <?php endif; ?>

                    <!-- address -->
                    <?php if($page->address()->isNotEmpty()): ?>
                        <a class="contact-container__contact__flexbox__data__link" href="#"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i> <?= $page->address() ?></a>
                    <?php endif; ?>

                    <!-- email -->
                    <?php if($page->email()->isNotEmpty()): ?>
                        <a class="contact-container__contact__flexbox__data__link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $page->email() ?></a>
                    <?php endif; ?>

                    <!-- SNIPPET - SOCIALS -->
                    <div class="footer__content__block__socialsflexbox socials-grey">
                        <?php snippet('socials') ?>
                    </div>

                    <!-- TO RESERVE -->
                    <div class="contact-container__reserve">

                        <!-- reserveTitle -->
                        <?php if($page->reserveTitle()->isNotEmpty()): ?>
                            <h2 class="contact-container__reserve__title h2"><?= $page->reserveTitle() ?></h2>
                        <?php endif; ?>

                        <!-- reserveText -->
                        <?php if($page->reserveText()->isNotEmpty()): ?>
                            <p class="contact-container__reserve__paragraph p">
                                <?= $page->reserveText() ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- CONTACTFORM -->
                <div class="contact-container__contact__flexbox__contactform">
                    <form class="contact-container__contact__flexbox__contactform__form">
                        <div class="contact-container__contact__flexbox__contactform__form__flexbox">
                            <div class="contact-container__contact__flexbox__contactform__form__flexbox__box">
                                <label class="contact-container__contact__flexbox__contactform__form__label">Naam</label>
                                <input class="contact-container__contact__flexbox__contactform__form__input" type="text" name="name">
                            </div>

                            <div class="contact-container__contact__flexbox__contactform__form__flexbox__box">
                                <label class="contact-container__contact__flexbox__contactform__form__label">Email</label>
                                <input class="contact-container__contact__flexbox__contactform__form__input" type="text" name="email">
                            </div>
                        </div>

                        <label class="contact-container__contact__flexbox__contactform__form__label">Uw bericht</label>
                        <textarea class="contact-container__contact__flexbox__contactform__form__input textarea" type="text" name="message"></textarea>

                        <input class="contact-container__contact__flexbox__contactform__form__submit button-big" type="submit" value="Verzend">
                    </form>
                </div>
            </div>
        </div>



        <!-- GENERAL INFO MARK + ESTHER -->
        <div class="contact-container__general">

            <!-- generalTitle -->
            <?php if($page->generalTitle()->isNotEmpty()): ?>
                <h2 class="contact-container__general__title h2"><?= $page->generalTitle() ?></h2>
            <?php endif; ?>

            <!-- generalText -->
            <?php if($page->generalText()->isNotEmpty()): ?>
                <p class="contact-container__general__paragraph p">
                    <?= $page->generalText() ?>
                </p>
            <?php endif; ?>

            <!-- FLEXBOX -->
            <div class="contact-container__general__flexbox">
            
                <!-- STRUCTURE FOR GETTING EMPLOYEES -->
                <?php
                    // PUT ALL DATA OUT OF STRUCTURE IN ARRAY
                    $employees = $page->employees()->toStructure();

                    foreach ($employees as $employee):

                        // MAKE IMAGE OBJECT TO USE URL AS SOURCE
                        if($image = $employee->image()->toFile()):
                            $image = $employee->image()->toFile();
                        endif;
                ?>
                        <!-- EMPLOYEE -->
                        <div class="contact-container__general__flexbox__left">

                            <!-- employeeImage -->
                            <?php if($image->url() !== ''): ?>
                                <img class="contact-container__general__flexbox__left__img img" src="<?= $image->url() ?>" alt="Medewerker Fablab profielfoto">
                            <?php endif; ?>

                            <!-- employeeName -->
                            <?php if($employee->name()->isNotEmpty()): ?>
                                <h3 class="contact-container__general__flexbox__left__title h3"><?= $employee->name() ?></h3>
                            <?php endif; ?>

                            <!-- employeeFunction -->
                            <?php if($employee->function()->isNotEmpty()): ?>
                                <p class="contact-container__general__flexbox__left__function p"><?= $employee->function() ?></p>
                            <?php endif; ?>

                            <!-- employeeTel -->
                            <?php if($employee->tel()->isNotEmpty()): ?>
                                <a class="contact-container__general__flexbox__left__contact" href="#"><i class="fa fa-phone" aria-hidden="true"></i> <?= $employee->tel() ?></a>
                            <?php  endif; ?>

                            <!-- employeeEmail -->
                            <?php if($employee->email()->isNotEmpty()): ?>
                                <a class="contact-container__general__flexbox__left__contact" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <?=$employee->email()?></a>
                            <?php endif; ?>
                        </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>



        <!-- ACCESSIBILITY -->
        <?php snippet('accessibility') ?>



        <!-- GOOGLE MAPS -->
        <div class="contact-container__maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.4688544650553!2d4.3684762157246455!3d51.17358087958172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f1fdd88dbf09%3A0xfb32da549e12cd0c!2sKdG%20FabLab!5e0!3m2!1snl!2sbe!4v1636013741241!5m2!1snl!2sbe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    
<!-- SNIPPET - FOOTER -->
<?php snippet('footer') ?>

<!-- JAVASCRIPT TAB BAR -->
<?= js('build/js/tabbar-accessibility.js') ?>