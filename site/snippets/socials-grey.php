<div class="footer__content__block__socialsflexbox-grey">
    <?php
        $socials =$page->socials()->toStructure();

        foreach ($socials as $social): 
            if($social->social() == "facebook"):
    ?>
                <a class="footer__content__block__socialsflexbox-grey__social" href="<?= $social->url() ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        <?php 
            elseif ($social->social() == "instagram"):
        ?>
                <a class="footer__content__block__socialsflexbox-grey__social" href="<?= $social->url() ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <?php
            elseif ($social->social() == "linkedin"):
        ?>
                <a class="footer__content__block__socialsflexbox-grey__social" href="<?= $social->url() ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        <?php
            elseif ($social->social() == "tiktok"):
        ?>
                <a class="footer__content__block__socialsflexbox-grey__social" href="<?= $social->url() ?>"><i class="fab fa-tiktok"></i></a>
        <?php
            elseif ($social->social() == "kdg"):
        ?>
                <a class="footer__content__block__socialsflexbox-grey__social" href="<?= $social->url() ?>"><i class="fa fa-globe" aria-hidden="true"></i></a>
        <?php 
            endif;
        endforeach;
        ?>
</div>