<?php snippet('header') ?>

<?php snippet('menu-white') ?>



<div class="price-list-container">
    <h1 class="price-list-container__title h1"><?= $page->title() ?></h1>

    <?php if ($page->StandardMaterials()->isNotEmpty()) : ?>
        <p class="price-list-container__paragraph p"><?= $page->StandardMaterials() ?></p><br>
    <?php endif; ?>

    <?php if ($page->OwnMaterials()->isNotEmpty()) : ?>
        <p class="price-list-container__paragraph p"><?= $page->OwnMaterials() ?></p>
    <?php endif; ?>



    <div class="price-list-container__machine-start-up">
        <h2 class="price-list-container__machine-start-up__title h2">Machine opstartkost / item</h2>

        <?php $machineStartUpCosts = $page->machineStartUpCost()->ToStructure(); ?>

        <table class="table">
            <tr class="table__table-row">
                <th class="table__table-row__table-header p">Machine</th>
                <th class="table__table-row__table-header p">KdG studenten en personeel</th>
                <th class="table__table-row__table-header p">Privé/extern</th>
                <th class="table__table-row__table-header p">Bedrijf</th>
            </tr>

            <?php foreach($machineStartUpCosts as $startUpCost): ?>
                <tr class="table__table-row table-row">
                    <td class="table__table-row__table-data left"><?= $startUpCost->machine() ?></td>
                    <td class="table__table-row__table-data center">€ <?= $startUpCost->costIntern() ?></td>
                    <td class="table__table-row__table-data center">€ <?= $startUpCost->costExtern() ?></td>
                    <td class="table__table-row__table-data center">€ <?= $startUpCost->costCompany() ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
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
                                <td class="table__table-row__table-data center"><?= $item->instock() ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>



<?php snippet('footer') ?>

<?= js('build/js/accordion.js') ?>