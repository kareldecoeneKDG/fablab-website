<div class="contact-container__contact__flexbox__contactform">

    <?php //alert/succes message ?>
    <?php if ($success) : ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>

        <?php //error message 
        ?>
    <?php else : ?>
        <?php if (isset($alert['error'])) : ?>
            <div><?= $alert['error'] ?></div>
        <?php endif; ?>

        <form id="form" class="contact-container__contact__flexbox__contactform__form" method="post" action="<?= $page->url() ?>" novalidate>

            <?php //honeypot for cybersecurity analysis? 
            ?>
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="url" id="website" name="website" tabindex="-1">
            </div>

            <div class="contact-container__contact__flexbox__contactform__form__flexbox">
                <div class="contact-container__contact__flexbox__contactform__form__flexbox__box field form-control">
                    <label class="contact-container__contact__flexbox__contactform__form__label" <?php //for="name" ?>>Naam</label>
                    <input id="name" class="contact-container__contact__flexbox__contactform__form__input" type="text" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    <small>Error message</small>
                    <?php //isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
                </div>

                <div class="contact-container__contact__flexbox__contactform__form__flexbox__box field form-control">
                    <label class="contact-container__contact__flexbox__contactform__form__label" <?php //for="email" ?>>Email</label>
                    <input id="email" class="contact-container__contact__flexbox__contactform__form__input" type="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    <small>Error message</small>
                    <?php //isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
                </div>
            </div>

            <div class="field form-control">
                <label class="contact-container__contact__flexbox__contactform__form__label" for="message">Uw bericht</label>
                <textarea id="message" class="contact-container__contact__flexbox__contactform__form__input textarea" name="message" required><?= esc($data['text'] ?? '') ?></textarea>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <small>Error message</small>
                <?php //isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
            </div>

            <input class="contact-container__contact__flexbox__contactform__form__submit button-small" type="submit" name="submit" value="Verzend">
        </form>
    <?php endif ?>
</div>