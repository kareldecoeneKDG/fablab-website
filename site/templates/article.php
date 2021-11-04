<?php snippet('header') ?>

<section class="content article">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->image()  ?>
    <div style="display:flex" class="share">
        <div  class="icon">icon</div>
        <h4 >Delen</h4>
    </div>
    <?= $page->text()->kirbytext() ?>
    <a href="<?= url('blog') ?>">Back…</a>
  </article>
</section>
    
<?php snippet('footer') ?>