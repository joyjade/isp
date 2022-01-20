<?php snippet('nav')?>

<section class="split divider">
  <div class="content">
    <h6><a href="<?=$page->parent()->url()?>">← Back to Project</a></h6>
    <h1><?=$page->title()?></h1>
    <p><?=$page->description()?></p>
  </div>
  <div class="image">
    <figure>
      <?php if($image = $page->image('project.jpg')): ?>
        <img src="<?= $image->url() ?>">
      <?php endif ?>
    </figure>
  </div>
</section>

<?php snippet('footer')?>