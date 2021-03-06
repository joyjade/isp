<?php snippet('nav')?>
<div class="main">
  <section class="split divider">
    <div class="content">
      <h6><a href="<?=$page->parent()->url()?>">← Back to Project</a></h6>
      <h1><?=$page->heading()?></h1>
      <p><?=$page->description()?></p>
    </div>
    <div class="image">
      <figure>
        <?php if($image = $page->photo()->toFile()): ?>
          <img src="<?= $image->url() ?>">
          <?php endif ?>
        </figure>
      </div>
    </section>  
</div>
<?php snippet('footer')?>