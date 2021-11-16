<!-- SNIPPET - HEADER -->
<?php snippet('header') ?>

    <main class="what-is-fablab-container">

        <!-- SNIPPET - MENU -->
        <?php snippet('menu') ?>

        <div class="what-is-fablab-container__introduction sectionOne">

            <!-- BREADCRUMB -->
            <div class="breadcrumb" itemprop="breadcrumb">
                <?php foreach($site->breadcrumb() AS $crumb): ?>
                    <?php if ($crumb->isActive()): ?>
                        <span typeof="v:Breadcrumb">
                            <span class="breadcrumb_last" property="v:title">
                                <?php echo $crumb->title() ?>
                            </span>
                        </span>
                    <?php else: ?>
                        <span typeof="v:Breadcrumb">
                            <a href="<?php echo $crumb->url() ?>" rel="v:url" property="v:title">
                                <?php echo $crumb->title() ?>
                            </a>
                        </span> &rsaquo;
                    <?php endif ?>
                <?php endforeach ?>
            </div>

            <h1 class="what-is-fablab-container__introduction__title h1"><?= $page->title() ?></h1>

            <div class="what-is-fablab-container__introduction__flexbox">
                <div class="what-is-fablab-container__introduction__flexbox__left">
                    <p class="what-is-fablab-container__introduction__flexbox__left__p p">
                        Het KdG FabLab is een maakplaats voor iedereen. Je vindt er onder andere 3D-printers, een Makerbot, lasercutters, een CNC-frees, AR/VR-space, een woodshop, een textielatelier, een elektronica-corner en educatieve tools zoals 
                        Makey Makeys, Microbits en Strawbees. Je kan er je ideeën omzetten naar tastbare producten, studenten en andere makers ontmoeten, je laten inspireren, kennis en ideeën uitwisselen en zoveel meer.
                    </p>

                    <!-- TEAM FABLAB MOBILE -->
                    <div class="what-is-fablab-container__introduction__flexbox__left__team">
                        <h3 class="what-is-fablab-container__introduction__flexbox__left__team__title">Team Fablab</h3>

                        <div class="what-is-fablab-container__introduction__flexbox__left__team__flexbox">
                            <div class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box">
                                <img class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box__img" src="#" alt="bla">
                            </div>

                            <div class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box">
                                <h4 class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box__title h4">Mark Vekemans</h4>
                                <p class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box__function p">Product Developer, Design consultant, Coördinator Fablab</p>
                            </div>
                        </div>

                        <div class="what-is-fablab-container__introduction__flexbox__left__team__flexbox">
                            <div class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box">
                                <img class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box__img" src="#" alt="bla">
                            </div>

                            <div class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box">
                                <h4 class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box__title h4">Esther van de Poll</h4>
                                <p class="what-is-fablab-container__introduction__flexbox__left__team__flexbox__box__function p">Digital Designer & Maker, Technisch medewerker Fablab</p>
                            </div>
                        </div>
                    </div>

                    <h1 class="what-is-fablab-container__introduction__flexbox__left__title h1">
                        Van waar komt het woord Fablab
                    </h1>

                    <p class="what-is-fablab-container__introduction__flexbox__left__p p">
                        Fab lab is de afkorting van het Engelse fabrication laboratory. Een fablab is een coöperatieve werkplaats waar uitvinders en ontwikkelaars gebruik kunnen maken van een collectieve infrastructuur. 
                        In het Fablab kunnen machines met behulp van computer en software aangestuurd worden om dingen te maken als prototypes, maquettes en nog veel meer.

                        Het idee is bedacht professor Neil Gershenfeld een beroemde wetenschapper en uitvinder aan het prestigieuze MIT (Massachusetts Institute of Technology). 

                        Zijn idee was simpel : een omgeving creëren waarin skills, technologie en materialen ingezet kunnen worden om op een snelle, efficiënte manier dingen te kunnen fabriceren, eender waar in de wereld, en deze Fablabs openstellen 
                        voor entrepreneurs, studenten, artiesten, kleine ondernemingen; en in feite voor iedereen die iets wil ontwerpen of fabriceren.
                    </p>

                    <h1 class="what-is-fablab-container__introduction__flexbox__left__title h1-what-is-fablab">
                        <span class="what-is-fablab-container__introduction__flexbox__left__title__spanleft">Fabrication</span>
                        <span class="what-is-fablab-container__introduction__flexbox__left__title__spanleft">laboratory</span>
                    </h1>
                </div>

                <!-- TEAM FABLAB DESKTOP -->
                <div class="what-is-fablab-container__introduction__flexbox__right">
                    <div class="what-is-fablab-container__introduction__flexbox__right__titlecontainer">
                        <h2 class="what-is-fablab-container__introduction__flexbox__right__titlecontainer__title h2">Team Fablab</h2>
                    </div>

                    <div class="what-is-fablab-container__introduction__flexbox__right__flexbox">
                        <div class="what-is-fablab-container__introduction__flexbox__right__flexbox__box">
                            <img class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__img" src="#" alt="bla">
                            <h3 class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__title h3">Mark vekemans</h3>
                            <p class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__paragraph p">
                                Product Developer, Design consultant, Coördinator Fablab
                            </p>
                        </div>

                        <div class="what-is-fablab-container__introduction__flexbox__right__flexbox__box">
                            <img class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__img" src="#" alt="bla">
                            <h3 class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__title h3">Esther van de Poll</h3>
                            <p class="what-is-fablab-container__introduction__flexbox__right__flexbox__box__paragraph p">
                                Digital Designer & Maker, Technisch medewerker Fablab
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!-- SNIPPET - FOOTER -->
<?php snippet('footer') ?>