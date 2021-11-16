<?php snippet('header') ?>
 <!-- SNIPPET - MENU -->
 <?php snippet('menu-white') ?>
<section class="content-article">
    
  <article>
    <h1 class="h1"  ><?= $page->title()->html() ?></h1>
    <img src="<?= $page->image()->url()?>" alt="">
    <div style="display:flex; " class="share">
        <a  class="content-article__icon" href=""><i class="fa fa-share"></i></a>
        <h3>Delen</h3>
        <a href="#" class="facebook-button">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#" class="twitter-button">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#" class="whatsapp-button">
          <i class="fa fa-whatsapp"></i>
        </a>
    </div>
    <p class="p"><?= $page->text()->toBlocks() ?></p>
    <p class="p__date">Gepubliceerd op <?= $page->Date()->toDate('d-m-Y') ?></p>
  </article>
</section>
<section class="related-articles">
    <?php
    $related = $page->related()->toPages();
    if ($related->count() > 0):
    ?>
    <h2 class="h2">Gerelateerde blogposts</h2>
    <div class="blog-wrapper">
    <?php foreach($related as $article): ?>
    <article class="blog-wrapper__blog-overview">
       <img src="<?= $article->image()->url()?>" alt="">
       <h2 class="h2-related"><?= $article->title()->html() ?></h2>
    </article>
    <?php endforeach ?>
</div>
</section>
    <?php endif ?>
</section>
    
<?php snippet('footer') ?>