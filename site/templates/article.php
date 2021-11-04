<?php snippet('header') ?>

<section class="content-article">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <img src="<?= $page->image()->url()?>" alt="">
    <div style="display:flex" class="share">
        <a  class="icon" href=""><i class="fa fa-share"></i></a>
        <h4 >Delen</h4>
    </div>
    <?= $page->text()->kirbytext() ?>
    <a href="<?= url('blog') ?>">Back…</a>
  </article>
</section>
    
<?php snippet('footer') ?>