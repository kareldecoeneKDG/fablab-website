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

    <div class="price-list-container__materials">
        <h2 class="price-list-container__materials__title h2">Materialen</h2>

        <?php $materials = $page->materials()->ToStructure(); ?>

        <?php foreach($materials as $material): ?>
            <div class="faq-wrapper__section__item faq">
                <div class="faq-wrapper__section__item__questioncontainer question">
                    <h3><?= $material->name() ?></h3>

                    <i class="faq-wrapper__section__item__questioncontainer__icon fa fa-minus icon-min" aria-hidden="true"></i>
                    <i class="faq-wrapper__section__item__questioncontainer__icon fa fa-plus icon" aria-hidden="true"></i>
                </div>

                <div class="faq-wrapper__section__item__answercontainer answer p answer-materials">
                    <?php $materialsItem = $material->materialitem()->ToStructure(); ?>

                    <table class="table">
                        <tr class="table__table-row table-row">
                            <th class="table__table-row__table-header p equal">Detail</th>
                            <th class="table__table-row__table-header p equal">Kleur</th>
                            <th class="table__table-row__table-header p equal">Maat</th>
                            <th class="table__table-row__table-header p equal">KdG studenten en personeel</th>
                            <th class="table__table-row__table-header p equal">Privé/extern</th>
                            <th class="table__table-row__table-header p equal">Bedrijf</th>
                            <th class="table__table-row__table-header p equal">In voorraad</th>
                        </tr>

                        <?php foreach($materialsItem as $item): ?>
                            <tr class="table__table-row table-row">
                                <td class="table__table-row__table-data center"><?= $item->detail() ?></td>
                                <td class="table__table-row__table-data center"><?= $item->color() ?></td>
                                <td class="table__table-row__table-data center"><?= $item->size() ?></td>
                                <td class="table__table-row__table-data center">€ <?= $item->pricekdg() ?></td>
                                <td class="table__table-row__table-data center">€ <?= $item->priceextern() ?></td>
                                <td class="table__table-row__table-data center">€ <?= $item->pricecompany() ?></td>

                                <?php if($item->instock() == "true"): ?>
                                    <td class="table__table-row__table-data center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                <?php else: ?>
                                    <td class="table__table-row__table-data center"><i class="fa fa-times" aria-hidden="true"></i></i></td>
                                <?php endif; ?>

                                <?php //<td class="table__table-row__table-data center"><?= $item->instock()</td> ?>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        <?php endforeach ?>
    </div>