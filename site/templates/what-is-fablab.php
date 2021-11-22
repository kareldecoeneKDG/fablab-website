<?php //SNIPPET - HEADER ?>
<?php snippet('header') ?>

    <main class="what-is-fablab-container">

        <?php //SNIPPET - MENU ?>
        <?php snippet('menu-white') ?>

        <div class="what-is-fablab-container__introduction sectionOne">

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

            <?php if($page->whatIsFablabTitle()->isNotEmpty()): ?>
                <h1 class="what-is-fablab-container__introduction__title h1"><?= $page->whatIsFablabTitle() ?></h1>
            <?php endif; ?>

            <div class="what-is-fablab-container__introduction__flexbox">
                <div class="what-is-fablab-container__introduction__flexbox__left">

                    <?php if($page->whatIsFablabText()->isNotEmpty()): ?>
                        <p class="what-is-fablab-container__introduction__flexbox__left__p p"><?= $page->whatIsFablabText() //->markdown() ?></p>
                    <?php endif; ?>

                    <?php //TEAM FABLAB MOBILE ?>
                    <div class="what-is-fablab-container__introduction__flexbox__left__team">

                        <div class="what-is-fablab-container__introduction__flexbox__left__team__titlecontainer">
                            <h2 class="what-is-fablab-container__introduction__flexbox__left__team__titlecontainer__title h2">Team Fablab</h2>
                        </div>

                        <div class="what-is-fablab-container__introduction__flexbox__left__team__container">

                            <?php //GET INFO FROM CONTACTPAGE ?>
                            <?php if($contactpage = page('contact')): ?>
                                <?php $employees = $contactpage->employees()->toStructure();
                                foreach($employees as $employee): ?>
                                    <div class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox">
                                        <div class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box">

                                            <?php if($employeeImg = $employee->image()->toFile()): ?>
                                                <img class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box__img" src="<?= $employeeImg->url() ?>" alt="bla">
                                            <?php endif; ?>
                                        </div>

                                        <div class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box">

                                            <?php if($employee->name()->isNotEmpty()): ?>
                                                <h3 class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box__title h3"><?= $employee->name() ?></h3>
                                            <?php endif; ?>

                                            <?php if($employee->function()->isNotEmpty()): ?>
                                                <p class="what-is-fablab-container__introduction__flexbox__left__team__container__flexbox__box__function p"><?= $employee->function() ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <?php if($employee->biography()->isNotEmpty()): ?>
                                        <p class="what-is-fablab-container__introduction__flexbox__left__team__container__biography p"><?= $employee->biography() //->markdown() ?></p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>  
                    </div>
                    
                    <?php if($page->wordFablabTitle()->isNotEmpty()): ?>
                        <h1 class="what-is-fablab-container__introduction__flexbox__left__title h1"><?= $page->wordFablabTitle() ?></h1>
                    <?php endif; ?>

                    <?php if($page->wordFablabText()->isNotEmpty()): ?>
                        <p class="what-is-fablab-container__introduction__flexbox__left__p p"><?= $page->wordFablabText() //->markdown() ?></p>
                    <?php endif; ?>

                    <h1 class="what-is-fablab-container__introduction__flexbox__left__title h1-what-is-fablab">
                        <span class="what-is-fablab-container__introduction__flexbox__left__title__span">Fabrication</span>
                        <span class="what-is-fablab-container__introduction__flexbox__left__title__span">laboratory</span>
                    </h1>
                </div>

                <?php //TEAM FABLAB DESKTOP ?>
                <div class="what-is-fablab-container__introduction__flexbox__right">
                    <div class="what-is-fablab-container__introduction__flexbox__right__flexbox">

                        <div class="what-is-fablab-container__introduction__flexbox__right__titlecontainer">
                            <h2 class="what-is-fablab-container__introduction__flexbox__right__titlecontainer__title h2">Team Fablab</h2>
                        </div>

                        <?php //GET INFO FROM CONTACTPAGE ?>
                        <?php if($contactpage = page('contact')): ?>
                            <?php $employees = $contactpage->employees()->toStructure();
                            foreach($employees as $employee): ?>
                                <div class="what-is-fablab-container__introduction__flexbox__right__flexbox__box">

                                    <?php if($employeeImg = $employee->image()->toFile()): ?>
                                        <img class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__img" src="<?= $employeeImg->crop(150)->url() ?>" alt="bla">
                                    <?php endif; ?>

                                    <div class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__box">

                                        <?php if($employee->name()->isNotEmpty()): ?>
                                            <h3 class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__title h3"><?= $employee->name() ?></h3>
                                        <?php endif; ?>

                                        <?php if($employee->function()->isNotEmpty()): ?>
                                            <p class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__function p"><?= $employee->function() ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php if($employee->biography()->isNotEmpty()): ?>
                                    <p class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__biography p"><?= $employee->biography() //->markdown() ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php //SNIPPET - FOOTER ?>
<?php snippet('footer') ?>