<?php snippet('header') ?>

    <div class="contact-container">

        <!-- CONTACT -->
        <div class="contact-container__contact">
            <h1 class="contact-container__contact__title h1"><?= $page->page_title() ?></h1>

            <div class="contact-container__contact__flexbox">
                <div class="contact-container__contact__flexbox__data">
                    <a class="contact-container__contact__flexbox__data__link" href="#"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i> <?= $page->address() ?></a>
                    <a class="contact-container__contact__flexbox__data__link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $page->email() ?></a>

                    <div class="contact-container__contact__flexbox__data__socials">
                        <a class="contact-container__contact__flexbox__data__socials__item" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a class="contact-container__contact__flexbox__data__socials__item" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a class="contact-container__contact__flexbox__data__socials__item" href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="contact-container__contact__flexbox__contactform">
                    <form class="contact-container__contact__flexbox__contactform__form">
                        <label class="contact-container__contact__flexbox__contactform__form__label">Naam</label>
                        <input class="contact-container__contact__flexbox__contactform__form__input" type="text" name="name">

                        <label class="contact-container__contact__flexbox__contactform__form__label">Email</label>
                        <input class="contact-container__contact__flexbox__contactform__form__input" type="text" name="email">

                        <label class="contact-container__contact__flexbox__contactform__form__label">Uw bericht</label>
                        <textarea class="contact-container__contact__flexbox__contactform__form__input textarea" type="text" name="message"></textarea>

                        <input class="contact-container__contact__flexbox__contactform__form__submit button-big" type="submit" value="Verzend">
                    </form>
                </div>
            </div>
        </div>


        <!-- RESERVEREN -->
        <div class="contact-container__reserve">
            <h2 class="contact-container__reserve__title h2">Reserveren</h2>

            <p class="contact-container__reserve__paragraph p">
                <?= $page->reserve() ?>
            </p>
        </div>


        <!-- ALGEMENE INFO EN VRAGEN -->
        <div class="contact-container__general">
            <h2 class="contact-container__general__title h2">Algemene info & vragen</h2>

            <p class="contact-container__general__paragraph p">
                <?= $page->generalinfo() ?>
            </p>

            <!-- MARK VEKEMANS -->
            <div class="contact-container__general__flexbox">
                <div class="contact-container__general__flexbox__left">
                    <img class="contact-container__general__flexbox__left__img img" src="assets/images/mark.jpg" alt="Mark Vekemans">

                    <h3 class="contact-container__general__flexbox__left__title h3"><?= $page->employee1() ?></h3>
                    <p class="contact-container__general__flexbox__left__function p"><?= $page->employee1_function() ?></p>

                    <a class="contact-container__general__flexbox__left__contact" href="#"><i class="fa fa-phone" aria-hidden="true"></i> <?= $page->employee1_telephone() ?></a>
                    <a class="contact-container__general__flexbox__left__contact" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $page->employee1_email() ?></a>
                </div>
            </div>

            <!-- ESTHER VAN DE POLL -->
            <div class="contact-container__general__flexbox">
                <div class="contact-container__general__flexbox__left">
                    <img class="contact-container__general__flexbox__left__img img" src="assets/images/esther.jpeg" alt="Esther van de Poll">

                    <h3 class="contact-container__general__flexbox__left__title h3"><?= $page->employee2() ?></h3>
                    <p class="contact-container__general__flexbox__left__function p"><?= $page->employee2_function() ?></p>

                    <a class="contact-container__general__flexbox__left__contact" href="#"><i class="fa fa-phone" aria-hidden="true"></i> <?= $page->employee2_telephone() ?></a>
                    <a class="contact-container__general__flexbox__left__contact" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $page->employee2_email() ?></a>
                </div>
            </div>
        </div>


        <!-- BEREIKBAARHEID -->
        <?php snippet('accessibility') ?>


        <!-- GOOGLE MAPS -->
        <div class="contact-container__maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.4688544650553!2d4.3684762157246455!3d51.17358087958172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f1fdd88dbf09%3A0xfb32da549e12cd0c!2sKdG%20FabLab!5e0!3m2!1snl!2sbe!4v1636013741241!5m2!1snl!2sbe" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    
<?php snippet('footer') ?>