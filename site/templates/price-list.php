<?php //SNIPPET - HEADER ?>
<?php snippet('header') ?>
    
    <?php //SNIPPET - MENU WHITE ?>
    <?php snippet('menu-white') ?>

    <div class="price-list-container">
    <h1 class="price-list-container__title h1"><?= $page->title() ?></h1>
    <?php 
        $standardmat = $page->standardmaterials();
        $ownmat = $page->ownmaterials();
        $materialstructure = $page->materials()->toStructure();
    ?>

        
            <p class="price-list-container__paragraph p">
                <?= $standardmat?>
                <br><br>

            </p>
        
            <p class="price-list-container__paragraph p">
                 <?= $ownmat?>
            </p>
      
        <div class="price-list-container__material-container">
        
        
            <?php 
            $i = 0;
            foreach ($materialstructure as $item): 
                $materialitem = $item->materialitem()->toStructure();
            ?>  
                <div class="price-list-container__material-container__title-container accordion-title">
                    <h3 class="price-list-container__material-title h3"><?= $item->name()?></h3>
                </div>
                
                <div class="price-list-container__material-container__table-container accordion-content">
                    <table class="price-list-container__material-container__table-container__table">
                        <tr class="price-list-container__material-container__table-container__table__table-row">
                            <td class="price-list-container__material-container__table-container__table__table-row__table-dimension">Detail</td>
                            <td class="price-list-container__material-container__table-container__table__table-row__table-dimension"> Kleur</td>
                            <td class="price-list-container__material-container__table-container__table__table-row__table-dimension">Maat</td>
                            <td class="price-list-container__material-container__table-container__table__table-row__table-dimension">KdG studenten en personeel</td>
                            <td class="price-list-container__material-container__table-container__table__table-row__table-dimension">Privé/extern</td>
                            <td class="price-list-container__material-container__table-container__table__table-row__table-dimension">Bedrijf</td>
                            <td class="price-list-container__material-container__table-container__table__table-row__table-dimension">In Stock</td>
                        </tr>
                        <?php
                            foreach($materialitem as $item):
                        ?>
                        <tr class="<?php 
                            if($i%2 == 0){
                                echo "oneven";
                                $i++;
                            }
                            else{
                                echo "even";
                                $i++;
                            }
                        ?>">    
                            <td><?= $item->detail() ?></td>
                            <td><?= $item->color() ?></td>
                            <td><?= $item->size() ?></td>
                            <td>€<?= $item->pricekdg() ?></td>
                            <td>€<?= $item->priceextern() ?></td>
                            <td>€<?= $item->pricecompany() ?></td>
                            <td> 
                                <?php 
                                    if($item->instock() == "true"){
                                        echo('<i class="fa fa-check" aria-hidden="true"></i>');
                                    }
                                    else{
                                        echo('<i class="fa fa-times" aria-hidden="true"></i>');
                                    }
                                ?> 
                            </td> 
                        </tr>
                        <?php
                            endforeach;
                        ?>
                        
                    </table>
                </div>
            <?php endforeach; ?>
            
        </div>
        
        
        </div>
        
<?php //SNIPPET - FOOTER ?>
<?php snippet('footer') ?>