<?php snippet('header') ?>

    <h1><?= $page->title() ?></h1>
    <?php 
        $mdfitems = $page->mdf()->toStructure();
        $filamentitems = $page->filaments()->toStructure();
        $vinylrolanditems = $page->vinylroland()->toStructure();
        $flexitems = $page->flex()->toStructure();
        $divitems = $page->diverse()->toStructure();
    ?>
        <h3>MDF</h3>
        <table>
        <tr>
            <td>Dikte (mm)</td>
            <td>Afmetingen (l x b)</td>
            <td>Prijs KdG</td>
            <td>Prijs Extern</td>
        </tr>
        
        <?php foreach ($mdfitems as $item): ?>
            <tr>
                <td><?= $item->thickness() ?></td>
                <td><?= $item->size() ?></td>
                <td><?= $item->pricekdg() ?></td>
                <td><?= $item->priceextern() ?></td>
            </tr>
        <?php endforeach ?>
        </table>
        <h3>3D Filamenten</h3>
        <table>
        <tr>
            <td>Materiaal</td>
            <td>Kleur</td>
            <td>Prijs KdG</td>
            <td>Prijs Extern</td>
        </tr>
        
        <?php foreach ($filamentitems as $item): ?>
            <tr>
                <td><?= $item->material() ?></td>
                <td><?= $item->color() ?></td>
                <td><?= $item->pricekdg() ?></td>
                <td><?= $item->priceextern() ?></td>
            </tr>
        <?php endforeach ?>
        </table>
        <h3>Snijvinyl voor Roland GS-24</h3>
        <table>
        <tr>
            <td>Kleur</td>
            <td>Afmetingen</td>
            <td>Prijs KdG</td>
            <td>Prijs Extern</td>
        </tr>
        
        <?php foreach ($vinylrolanditems as $item): ?>
            <tr>
                <td><?= $item->color() ?></td>
                <td><?= $item->size() ?></td>
                <td><?= $item->pricekdg() ?></td>
                <td><?= $item->priceextern() ?></td>
            </tr>
        <?php endforeach ?>
        </table>
        <h3>FLEX (snijmateriaal om op textiel te strijken)</h3>
        <table>
        <tr>
            <td>Kleur</td>
            <td>Afmetingen</td>
            <td>Prijs KdG</td>
            <td>Prijs Extern</td>
        </tr>
        
        <?php foreach ($flexitems as $item): ?>
            <tr>
                <td><?= $item->color() ?></td>
                <td><?= $item->size() ?></td>
                <td><?= $item->pricekdg() ?></td>
                <td><?= $item->priceextern() ?></td>
            </tr>
        <?php endforeach ?>
        </table>
<?php snippet('footer') ?>