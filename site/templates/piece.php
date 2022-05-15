<?php snippet('nav')?>
<div class="main">
  <section class="split divider">
    <div class="content">
      <h6><a href="<?=$page->parent()->url()?>">← Back to Project</a></h6>
      <h1><?=$page->heading()?></h1>
      <p><?=$page->description()?></p>
      <?=$page->embed()?>
    </div>
    <div class="image">
      <div class="sticky">
        <?php if($page->videos()->isNotEmpty()):
          foreach($page->videos() as $video): ?>
            <video width="<?=$video->width() ?>" height="<?=$video->height() ?>" autoplay >
              <source src="<?= $video->url() ?>">
            </video>
          <?php endforeach ?>
        <?php elseif($image = $page->photo()->toFile()): ?>
          <figure>
            <img src="<?= $image->url() ?>">
          </figure>
        <?php endif ?>
      </div>
    </div>
  </section>  
</div>
<?php snippet('footer')?>