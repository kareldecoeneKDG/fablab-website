<?php snippet('header') ?>
    
    <!-- SNIPPET - MENU -->
    <?php snippet('menu-white') ?>

    <div class="price-list-container">
    <h1 class="price-list-container__title h1"><?= $page->title() ?></h1>
    <?php 
        $standardmat = $page->standardmaterials();
        $ownmat = $page->ownmaterials();
        $mdfitems = $page->mdf()->toStructure();
        $filamentitems = $page->filaments()->toStructure();
        $vinylrolanditems = $page->vinylroland()->toStructure();
        $flexitems = $page->flex()->toStructure();
        $divitems = $page->diverse()->toStructure();
    ?>

        
            <p class="price-list-container__paragraph p">
                <?= $standardmat?>
                <br><br>

            </p>
        
            <p class="price-list-container__paragraph p">
                 <?= $ownmat?>
            </p>
      
        <div class="price-list-container__material-container">
        <h3 class="price-list-container__material-title h3">MDF</h3>
        <table class="price-list-container__material-container__table">
        <tr>
            <td>Dikte (mm)</td>
            <td>Afmetingen (l x b)</td>
            <td>Prijs KdG</td>
            <td>Prijs Extern</td>
            <td>In Stock</td>
        </tr>
        
        <?php 
        $i = 0;
        foreach ($mdfitems as $item): 
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
            
                <td><?= $item->thickness() ?></td>
                <td><?= $item->size() ?></td>
                <td><?= $item->pricekdg() ?></td>
                <td><?= $item->priceextern() ?></td>
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
        <?php endforeach ?>
        </table>
        </div>
        <h3 class="price-list-container__material-title h3">3D Filamenten</h3>
        <table>
        <tr>
            <td>Materiaal</td>
            <td>Kleur</td>
            <td>Prijs KdG</td>
            <td>Prijs Extern</td>
            <td>In Stock</td>
        </tr>
        
        <?php 
        $i=0;
        foreach ($filamentitems as $item): 
        ?>
            <tr
            class="<?php 
                if($i%2 == 0){
                    echo "oneven";
                    $i++;
                }
                else{
                    echo "even";
                    $i++;
                }?>"
            >
                <td><?= $item->material() ?></td>
                <td><?= $item->color() ?></td>
                <td><?= $item->pricekdg() ?></td>
                <td><?= $item->priceextern() ?></td>
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
        <?php endforeach ?>
        </table>
        <h3 class="price-list-container__material-title h3">Snijvinyl voor Roland GS-24</h3>
        <table>
        <tr>
            <td>Kleur</td>
            <td>Afmetingen</td>
            <td>Prijs KdG</td>
            <td>Prijs Extern</td>
            <td>In Stock</td>
        </tr>
        
        <?php 
        $i=0;
        foreach ($vinylrolanditems as $item): 
        ?>
            <tr
            class="<?php 
                if($i%2 == 0){
                    echo "oneven";
                    $i++;
                }
                else{
                    echo "even";
                    $i++;
                }?>"
            >
                <td><?= $item->color() ?></td>
                <td><?= $item->size() ?></td>
                <td><?= $item->pricekdg() ?></td>
                <td><?= $item->priceextern() ?></td>
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
        <?php endforeach ?>
        </table>
        <h3 class="price-list-container__material-title h3">FLEX (snijmateriaal om op textiel te strijken)</h3>
        <table>
        <tr>
            <td>Kleur</td>
            <td>Afmetingen</td>
            <td>Prijs KdG</td>
            <td>Prijs Extern</td>
            <td>In Stock</td>
        </tr>
        
        <?php
        $i=0;
        foreach ($flexitems as $item): 
        ?>
            <tr
            class="<?php 
                if($i%2 == 0){
                    echo "oneven";
                    $i++;
                }
                else{
                    echo "even";
                    $i++;
                }?>"
            >
                <td><?= $item->color() ?></td>
                <td><?= $item->size() ?></td>
                <td><?= $item->pricekdg() ?></td>
                <td><?= $item->priceextern() ?></td>
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
        <?php endforeach ?>
        </table>
        <h3 class="price-list-container__material-title h3">Allerlei</h3>
        <table>
        <tr>
            <td>Type</td>
            <td>Afmetingen</td>
            <td>Prijs KdG</td>
            <td>Prijs Extern</td>
            <td>In Stock</td>
        </tr>
        
        <?php 
        $i=0;
        foreach ($divitems as $item): 
        ?>
            <tr
            class="<?php 
                if($i%2 == 0){
                    echo "oneven";
                    $i++;
                }
                else{
                    echo "even";
                    $i++;
                }?>"
            >
                <td><?= $item->divtype() ?></td>
                <td><?= $item->size() ?></td>
                <td><?= $item->pricekdg() ?></td>
                <td><?= $item->priceextern() ?></td>
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
        <?php endforeach ?>
        </table>
        </div>
<?php snippet('footer') ?>