<?php snippet('header') ?>

<section class="content blog">

<h1><?= $page->Subtitle()->html() ?></h1>


    <?php foreach($tags as $tag): ?>
        <button>
      <a href="<?= url($page->url(), ['params' => ['tag' => $tag]]) ?>">
        <?= html($tag) ?>
      </a>
      </button>
    <?php endforeach ?>


<div class="blog-wrapper">
<?php foreach($page->children()->listed()->flip() as $article): ?>

<article class="blog-overview">
   
    <img src="<?= $article->image()->url()?>" alt="">
        
        <h1><?= $article->title()->html() ?></h1>
        <p><?= $article->text()->excerpt(70) ?></p>
        <p><?= $article->tags() ?></p>
        <a href="<?= $article->url() ?>">Lees meer ></a>
</article>

<?php endforeach ?>
</div>
</section>
    
<?php snippet('footer') ?>