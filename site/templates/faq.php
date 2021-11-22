<?php //SNIPPET - HEADER ?>
<?php snippet('header') ?>

    <?php //SNIPPET - MENU WHITE ?>
    <?php snippet('menu-white') ?>

    <main class="faq-wrapper">
        <section class="faq-wrapper__section sectionjs">
            <h1 class="faq-wrapper__section__title title h1">FAQs</h2>

            <?php $faqs = $page->FAQs()->toStructure(); ?>
            <?php foreach($faqs as $faq): ?>
                <div class="faq-wrapper__section__item faq">
                    <div class="faq-wrapper__section__item__questioncontainer question">

                        <?php if($faq->question()->isNotEmpty()): ?>
                            <h3 class="faq-wrapper__section__item__questioncontainer__question h3"><?= $faq->question() ?></h3>
                        <?php endif; ?>

                        <i class="faq-wrapper__section__item__questioncontainer__icon fa fa-minus icon-min" aria-hidden="true"></i>
                        <i class="faq-wrapper__section__item__questioncontainer__icon fa fa-plus icon" aria-hidden="true"></i>
                    </div>

                    <div class="faq-wrapper__section__item__answercontainer answer p">
                        <?php if($faq->answer()->isNotEmpty()): ?>
                            <p class="faq-wrapper__section__item__answercontainer__answer"><?= $faq->answer() ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach ?>
        </section>
    </main>

<?php //SNIPPET - FOOTER ?>
<?php snippet('footer') ?>

<?= js('build/js/accordion.js') ?>