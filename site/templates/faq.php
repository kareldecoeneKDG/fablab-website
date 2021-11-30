<?php snippet('header') ?>

<?php snippet('menu-white') ?>



    <?php /* <div class="container container-faq faq-wrapper">
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
    </div> */ ?>

    <div class="container container-faq">
        <section class="accordion-wrapper">
            <h1 class="accordion-wrapper__title title h1">FAQs</h2>



            <?php $faqs = $page->FAQs()->toStructure(); ?>
            <?php foreach($faqs as $faq): ?>
                <div class="accordion-item faq">
                    <div class="accordion-item__question question">

                        <?php if($faq->question()->isNotEmpty()): ?>
                            <h3 class="accordion-item__question__title h3"><?= $faq->question() ?></h3>
                        <?php endif; ?>

                        <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                        <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                    </div>



                    <div class="accordion-item__answer answer p">
                        <?php if($faq->answer()->isNotEmpty()): ?>
                            <p class="accordion-item__answer__paragraph"><?= $faq->answer() ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach ?>
        </section>
    </div>



<?php snippet('footer') ?>

<?= js('build/js/accordion.js') ?>