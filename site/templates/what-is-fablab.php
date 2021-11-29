<?php snippet('header') ?>

<?php snippet('menu-white') ?>



<div class="container container-what-is-fablab  what-is-fablab-container">
    <div class="what-is-fablab-container__introduction">

        <?php if ($page->whatIsFablabTitle()->isNotEmpty()) : ?>
            <h1 class="what-is-fablab-container__introduction__title h1"><?= $page->whatIsFablabTitle() ?></h1>
        <?php endif; ?>



        <div class="what-is-fablab-container__introduction__flexbox">
            <div class="what-is-fablab-container__introduction__flexbox__left">

                <?php if ($page->whatIsFablabText()->isNotEmpty()) : ?>
                    <p class="what-is-fablab-container__introduction__flexbox__left__p p"><?= $page->whatIsFablabText() ?></p>
                <?php endif; ?>



                <?php //GET INFO FROM CONTACTPAGE 
                ?>
                <?php if ($contactpage = page('contact')) : ?>
                    <?php $employees = $contactpage->employees()->toStructure(); ?>
                <?php endif; ?>



                <?php //TEAM FABLAB MOBILE 
                ?>
                <div class="what-is-fablab-container__introduction__flexbox__left__team">

                    <div class="what-is-fablab-container__introduction__flexbox__left__team__titlecontainer">
                        <h2 class="what-is-fablab-container__introduction__flexbox__left__team__titlecontainer__title h2">Team Fablab</h2>
                    </div>



                    <div class="what-is-fablab-container__introduction__flexbox__left__team__container">

                        <?php foreach ($employees as $employee) : ?>
                            <div class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox">
                                <div class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box">

                                    <?php if ($employeeImg = $employee->image()->toFile()) : ?>
                                        <img class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box__img" src="<?= $employeeImg->url() ?>" alt="Picture employee FabLab">
                                    <?php endif; ?>
                                </div>

                                <div class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box padding-top-what-is-fablab">
                                    <?php if ($employee->name()->isNotEmpty()) : ?>
                                        <h3 class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box__title h3"><?= $employee->name() ?></h3>
                                    <?php endif; ?>

                                    <?php if ($employee->function()->isNotEmpty()) : ?>
                                        <p class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box__function p"><?= $employee->function() ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if ($employee->biography()->isNotEmpty()) : ?>
                                <p class="what-is-fablab-container__introduction__flexbox__left__team__container__biography p"><?= $employee->biography() ?></p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>



                <?php if ($page->wordFablabTitle()->isNotEmpty()) : ?>
                    <h1 class="what-is-fablab-container__introduction__flexbox__left__title h1"><?= $page->wordFablabTitle() ?></h1>
                <?php endif; ?>

                <?php if ($page->wordFablabText()->isNotEmpty()) : ?>
                    <p class="what-is-fablab-container__introduction__flexbox__left__p p"><?= $page->wordFablabText() ?></p>
                <?php endif; ?>



                <h1 class="what-is-fablab-container__introduction__flexbox__left__title h1-what-is-fablab">
                    <span class="what-is-fablab-container__introduction__flexbox__left__title__span">Fabrication</span>
                    <span class="what-is-fablab-container__introduction__flexbox__left__title__span">laboratory</span>
                </h1>
            </div>



            <?php //TEAM FABLAB DESKTOP 
            ?>
            <div class="what-is-fablab-container__introduction__flexbox__right">
                <div class="what-is-fablab-container__introduction__flexbox__right__flexbox">

                    <div class="what-is-fablab-container__introduction__flexbox__right__titlecontainer">
                        <h2 class="what-is-fablab-container__introduction__flexbox__right__titlecontainer__title h2">Team Fablab</h2>
                    </div>



                    <?php foreach ($employees as $employee) : ?>
                        <div class="what-is-fablab-container__introduction__flexbox__right__flexbox__box">

                            <?php if ($employeeImg = $employee->image()->toFile()) : ?>
                                <img class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__img" src="<?= $employeeImg->crop(150)->url() ?>" alt="Picture employee FabLab">
                            <?php endif; ?>

                            <div class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__box">

                                <?php if ($employee->name()->isNotEmpty()) : ?>
                                    <h3 class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__title h3"><?= $employee->name() ?></h3>
                                <?php endif; ?>

                                <?php if ($employee->function()->isNotEmpty()) : ?>
                                    <p class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__function p"><?= $employee->function() ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if ($employee->biography()->isNotEmpty()) : ?>
                            <p class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__biography p"><?= $employee->biography() ?></p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php snippet('footer') ?>