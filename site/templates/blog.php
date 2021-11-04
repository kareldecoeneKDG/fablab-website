<?php snippet('header') ?>

<section class="content blog">

<h1><?= $page->Subtitle()->html() ?></h1>
<?= $page->text() ?>

<?php foreach($page->children()->listed() as $article): ?>

<article>
   <?= $project->image()->crop(500)  ?>
  <h1><?= $article->title()->html() ?></h1>
  <p><?= $article->text()->excerpt(300) ?></p>
  <a href="<?= $article->url() ?>">Read more…</a>
</article>

<?php endforeach ?>

</section>
    
<?php snippet('footer') ?>