<?php /* <section class="carousel-container">
    <?php if($page->creations()->isNotEmpty()): ?>
        <h2 class="category-wrapper__machines-wrapper__title h2">Inspiratie</h2>
    <?php endif; ?>



    <div class="container">
        <div class="carousel">
            <?php $creations = $page->creations()->ToStructure(); ?>

            <?php
            //Blue border around thumbnails
            $counterInput = 1;
            $prefixInput = "slide-";
            ?>

            <?php foreach($creations as $creation): ?>
                <?php $idAttribute = $prefixInput . $counterInput; ?>
                <input type="radio" name="slides" id="<?= $idAttribute ?>" class="radio-input">

                <?php $counterInput++; ?>
            <?php endforeach; ?>



            <?php //Actual image and content ?>
            <ul class="carousel__slides">
                <?php foreach($creations as $creation): ?>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <?php if($img = $creation->creationImage()->toFile()): ?>
                                    <img src="<?= $img->url() ?>" alt="Creation image">
                                <?php endif; ?>
                            </div>
                            <figcaption>
                                <?= $creation->creationsText() ?>
                                <span class="credit">Photo: <?= $creation->creationsCreator() ?></span>
                            </figcaption>
                        </figure>
                    </li>
                <?php endforeach; ?>
            </ul>



            <?php
                //The thumbnails
                $counter = 1;
                $prefix = "slide-";
            ?>
            
            <ul class="carousel__thumbnails">
                <?php foreach($creations as $creation): ?>
                    <?php $forAttribute = $prefix . $counter; ?>

                    <?php if($thumbnail = $creation->creationImage()->toFile()): ?>
                        <li><label for="<?= $forAttribute ?>"><img src="<?= $thumbnail->url() ?>" alt="Creation image thumbnail"></label></li>
                    <?php endif; ?>

                    <?php $counter++; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section> */ ?>

<section class="carousel">
    
</section>

<a href="../assets/images/previewimages/facebook-preview-image.png" data-lightbox="image-1" data-title="My caption" data-alt="test"><img src="../assets/images/previewimages/facebook-preview-image.png" alt="test" style="width: 100px"></a>
<a href="../assets/images/previewimages/berg.jpg" data-lightbox="image-1" data-title="My caption2" data-alt="test2"><img src="../assets/images/previewimages/berg.jpg" alt="test" style="width: 100px"></a>
<a href="../assets/images/previewimages/92.jpg" data-lightbox="image-1" data-title="My caption3" data-alt="test3"><img src="../assets/images/previewimages/92.jpg" alt="test" style="width: 100px"></a>