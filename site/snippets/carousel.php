<section class="carousel-container">
    <div class="container">
        <div class="carousel">

            <?php
            $thumbnails = $page->creations()->toFiles();
            $counter = 1;
            $prefix = "slide-";
            ?>

            <?php //Blue border around thumbnails ?>
            <?php
            $counterInput = 1;
            $prefixInput = "slide-";
            ?>

            <?php foreach ($thumbnails as $thumbnail) : ?>
                <?php $idAttribute = $prefixInput . $counterInput; ?>
                <input type="radio" name="slides" id="<?= $idAttribute ?>" class="radio-input">

                <?php $counterInput++; ?>
            <?php endforeach; ?>



            <ul class="carousel__slides">
                <?php foreach ($thumbnails as $thumbnail) : ?>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="<?= $thumbnail->url() ?>" alt="Creation image">
                            </div>
                            <figcaption>
                                Dit is een creatie dit gemaakt is in het FabLab.
                                <span class="credit">Photo: Mark Vekemans</span>
                            </figcaption>
                        </figure>
                    </li>
                <?php endforeach; ?>
            </ul>



            <ul class="carousel__thumbnails">
                <?php foreach ($thumbnails as $thumbnail) : ?>
                    <?php $forAttribute = $prefix . $counter; ?>
                    <?php //var_dump($forAttribute) 
                    ?>

                    <li>
                        <label for="<?= $forAttribute ?>"><img src="<?= $thumbnail->url() ?>" alt="Creation image thumbnail"></label>
                    </li>

                    <?php $counter++; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>