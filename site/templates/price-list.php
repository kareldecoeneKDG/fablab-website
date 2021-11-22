<?php //SNIPPET - HEADER ?>
<?php snippet('header') ?>
    
    <?php //SNIPPET - MENU WHITE ?>
    <?php snippet('menu-white') ?>

    <div class="price-list-container">
        
        <?php //BREADCRUMB ?>
        <div class="what-is-fablab-container__introduction__breadcrumb" itemprop="breadcrumb">
            <?php foreach($site->breadcrumb() AS $crumb): ?>
                <?php if ($crumb->isActive()): ?>
                    <span class="what-is-fablab-container__introduction__breadcrumb__container" typeof="v:Breadcrumb">
                        <span class="what-is-fablab-container__introduction__breadcrumb__container__breadcrumb-last" property="v:title">
                            <?php echo $crumb->title() ?>
                        </span>
                    </span>
                <?php else: ?>
                    <span class="what-is-fablab-container__introduction__breadcrumb__container" typeof="v:Breadcrumb">
                        <a class="what-is-fablab-container__introduction__breadcrumb__container__breadcrumb-last" href="<?php echo $crumb->url() ?>" rel="v:url" property="v:title">
                            <?php echo $crumb->title() ?>
                        </a>
                    </span> &rsaquo;
                <?php endif ?>
            <?php endforeach ?>
        </div>
    
        <h1 class="price-list-container__title h1"><?= $page->title() ?></h1>

        <?php if($page->StandardMaterials()->isNotEmpty()): ?>
            <p class="price-list-container__paragraph p"><?= $page->StandardMaterials() ?></p><br>
        <?php endif; ?>
        
        <?php if($page->OwnMaterials()->isNotEmpty()): ?>
            <p class="price-list-container__paragraph p"><?= $page->OwnMaterials()?></p>
        <?php endif; ?>
      



        <?php //PRICE LIST ACCORDION ?>
        <?php $materialsStructure = $page->Materials()->toStructure(); 
        var_dump($materialsStructure);?>
        
        <div class="price-list-container__material-container">
            
            <?php
            //COUNTER FOR BACKGROUND COLOR GREY
            $i = 0;

            //ACCORDION ITEM CONTAINER
            foreach ($materialsStructure as $material): 
                $materialDetailStructure = $material->materialitem()->toStructure();
                //var_dump($materialDetailStructure);
            
                /* if($materialDetailStructure->name()->isNotEmpty()): ?>
                    <h3 class="faq-wrapper__section__item__questioncontainer__question h3"><?= $materialDetailStructure->name() ?></h3>
                <?php endif; ?> */ ?>
                
                <!--
                <div class="price-list-container__material-container__table-container accordion-content">
                    <table class="price-list-container__material-container__table-container__table">

                        <?php //ITEM DETAILS CONTAINER ?>
                        <?php /* foreach($materialitem as $item): ?>
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
                        <?php endforeach; */ ?>

                -->
                        
                    </table>
                </div>
            <?php endforeach; ?>
            
        </div>
        
        
        </div>
        
<?php //SNIPPET - FOOTER ?>
<?php snippet('footer') ?>