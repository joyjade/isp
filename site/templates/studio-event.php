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
          <p><?= $page-> start_time()->toDate('g:i a')?> - <?= $page-> end_time()->toDate('g:i a')?></p>  
          <p><?= $page-> date()->toDate('l, F d, Y')?></p>  
        </div>
        <p><?=$page->description()?></p>
      </div>
     
      </section>  
  </div>
<?php snippet('footer')?>