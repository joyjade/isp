<?php snippet('nav')?>
  <div class="main">
    <section class="split divider">
      <div class="image">
        <figure>
          <?php if($image = $page->event_image()->toFile()): ?>
            <img src="<?= $image->url() ?>">
            <?php endif ?>
          </figure>
        </div>
      <div class="content">
        <h6><a href="<?=$page->parent()->url()?>">← Back to Studio</a></h6>
        <h1><?=$page->title()?></h1>
        <div class="details">
          <p><?= $page-> date()?></p>  
          <?= $page-> days_times()?>
        </div>
        <p><?=$page->description()?></p>
      </div>
     
      </section>  
  </div>
<?php snippet('footer')?>