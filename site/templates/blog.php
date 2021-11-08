<?php snippet('header') ?>

<section class="content-blog">

<h1><?= $page->Subtitle()->html() ?></h1>

<div class="content-blog__tag-filter">
    <?php foreach($tags as $tag): ?>
  
      <a class="content-blog__tag-filter__button-tag" href="<?= url($page->url(), ['params' => ['tag' => $tag]]) ?>">
        <?= html($tag) ?>
      </a>

    <?php endforeach ?>
    
</div>

<div class="blog-wrapper">
    <?php foreach($articles as $article): ?>
    <article class="blog-wrapper__blog-overview">
   
       <img src="<?= $article->image()->url()?>" alt="">
       <h1><?= $article->title()->html() ?></h1>
       <p><?= $article->text()->excerpt(70) ?></p>
       <a href="<?= $article->url() ?>">Lees meer ></a>
    </article>
    <?php endforeach ?>
</div>
</section>
    
<?php snippet('footer') ?>