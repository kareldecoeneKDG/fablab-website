        <footer class="footer">
            
            <!-- FLEXBOX -->
            <section class="footer__content">

                <!-- BLOCK -->
                <div class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer first-title h4">Contact</h4>

                    <!-- address -->
                    <?php if($site->address()->isNotEmpty()): ?>
                        <a class="footer__content__block__link" href="#"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i><?= $site->address() ?></a>
                    <?php endif; ?>

                    <!-- email -->
                    <?php if($site->email()->isNotEmpty()): ?>
                        <a class="footer__content__block__link footer__content__block__link-email" href="#"><i class="fa fa-envelope" aria-hidden="true"></i><?= $site->email() ?></a>
                    <?php endif; ?>

                    <!-- SNIPPET - SOCIALS -->
                    <div class="footer__content__block__socialsflexbox socials-white">
                        <?php snippet('socials') ?>
                    </div>
                </div>

                <!-- BLOCK - DESKTOP LAYOUT SITEMAP -->
                <div id="sitemap-desktop" class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Navigatie</h4>
                    <a class="footer__content__block__link" href="#">Home</a>
                    <a class="footer__content__block__link" href="#">Machines</a>
                    <a class="footer__content__block__link" href="#">Reserveren</a>
                    <a class="footer__content__block__link" href="#">Blog</a>
                    <a class="footer__content__block__link" href="#">Contact</a>
                </div>

                <!-- BLOCK - DESKTOP LAYOUT PAGES -->
                <div id="pages-desktop" class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Info</h4>
                    
                    <?php snippet('sitemap') ?>
                </div>

                <!-- BLOCK -->
                <div class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Openingsuren</h4>

                    <div class="footer__content__block__openhours">
                        <h5 class="footer__content__block__openhours__title h5-footer h5">KdG-medewerkers/studenten</h5>
                        <p class="footer__content__block__openhours__paragraph">ma - do: 9.00u - 17.00u</p>
                    </div>

                    <div class="footer__content__block__openhours">
                        <h5 class="footer__content__block__openhours__title h5-footer h5">Open lab momenten</h5>
                        <p class="footer__content__block__openhours__paragraph">woe - do: 13.00u - 17.00u</p>
                    </div>
                </div>

                <!-- BLOCK - MOBILE LAYOUT SITEMAP + PAGES -->
                <div class="footer__content__flexbox">
                    <div class="footer__content__flexbox__block">
                        <h4 class="footer__content__block__title h4-footer h4">Navigatie</h4>
                        <a class="footer__content__block__link" href="#">Home</a>
                        <a class="footer__content__block__link" href="#">Machines</a>
                        <a class="footer__content__block__link" href="#">Reserveren</a>
                        <a class="footer__content__block__link" href="#">Blog</a>
                        <a class="footer__content__block__link" href="#">Contact</a>
                    </div>

                    <div class="footer__content__flexbox__block">
                        <h4 class="footer__content__block__title h4-footer h4">Info</h4>
                        <a class="footer__content__block__link" href="#">FAQ</a>
                        <a class="footer__content__block__link" href="#">Huisregels</a>
                        <a class="footer__content__block__link" href="./price-list">Prijslijst</a>
                        <a class="footer__content__block__link" href="#">Wat is FabLab</a>
                    </div>
                </div>

                <!-- BLOCK -->
                <div class="footer__content__block">
                    <h4 class="footer__content__block__title h4-footer h4">Met steun van</h4>

                    <div class="footer__content__block__imageholder">
                        <img class="footer__content__block__imageholder__img" src="assets/images/footer-kdg.webp" alt="KdG logo">
                    </div>

                    <div class="footer__content__block__imageholder">
                        <img class="footer__content__block__imageholder__img" src="assets/images/footer-provincieA.webp" alt="Provincie Antwerpen logo">
                    </div>
                </div>
            </section>

            <!-- COPYRIGHT -->
            <section class="footer__copyright">
                &#169; 2021 FabLab KdG.
            </section>
        </footer>


        <!-- JAVASCRIPT RESPONSIVE NAV -->
        <?= js('build/js/app.js') ?>
    </body>
</html>