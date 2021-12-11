<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>
    
    <div class="container-reserve">
        <div class="reservation flex-row-desktop">
            <div>
                <h2 class="reservation__h2 h2">Maak een</h2>
                <h1 class="reservation__h1 h1">Reservatie</h1>

                <p class="reservation__p p">
                    Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer 
                    normale verdeling van letters bestaat, in tegenstelling tot "Hier uw tekst, hier uw tekst" wat het tot min of meer leesbaar nederlands maakt.
                </p>

                <div class="reservation__buttoncontainer">
                    <a class="reservation__buttoncontainer__button button-small">Reserveer nu <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>



            <div class="reservation__imgcontainer">
                <img class="reservation__imgcontainer__img" src="assets/images/fablab.webp">
            </div>
        </div>



        <div class="info flex-row-desktop">
            <div class="info__item flex-row">
                <div class="info__item__iconContainer">
                    <i class="info__item__iconContainer__icon fa fa-calendar" aria-hidden="true"></i>
                </div>

                <div class="info__item__text">
                    <h3 class="h3">Open lab momenten</h3>
                    <p class="p">woe-do: 13.00u - 17.00u</p>
                </div>
            </div>



            <div class="info__item flex-row">
                <div class="info__item__iconContainer">
                    <i class="info__item__iconContainer__icon fa fa-users" aria-hidden="true"></i>
                </div>

                <div class="info__item__text">
                    <h3 class="h3">Assistentie</h3>
                    <p class="p">bij vragen en problemen</p>
                </div>
            </div>



            <div class="info__item flex-row">
                <div class="info__item__iconContainer">
                    <i class="info__item__iconContainer__icon fa fa-cc-mastercard" aria-hidden="true"></i>
                </div>

                <div class="info__item__text">
                    <h3 class="h3">Snel betalen</h3>
                    <p class="p">met bancontact</p>
                </div>
            </div>
        </div>
    </div>

<?php snippet('general/footer')?>