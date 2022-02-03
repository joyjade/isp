<?php snippet('nav')?>

<div class="main cocreation">

  <section class="split flush banner m-reverse">
    <div>
      <figure>
        <?php if($image = $page->banner_image()->toFile()): ?>
          <img src="<?= $image->url() ?>">
        <?php endif ?>
      </figure>
    </div>
    <div class="content <?= $page->banner_color() ?>">
      <h6 class="uppercase"><?= $page->subheader() ?></h6>
      <h1 class="large"><?=$page ->title() ?></h1>
      <p class="large">
        <?= $page -> description() ?>
      </p>
    </div>
  </section>
  <section class="split flush">
    <div class=" <?= $page -> vision_color() ?> content">
      <div class="sticky">
        <h1>
          <span>
            <?= $page->vision_header()?>    
          </span>
        </h1>
        <p class="large">
          <?= $page->vision_description()?>    
        </p>
        <img class="inline-arrow" src="/assets/icons/arrow.svg" alt="">
      </div>
      <figure class="tatreez-bg">
        <img src="/assets/icons/pixels_square_2.svg" alt="" class="tatreez-icon m-hide">
      <figure class="tatreez-bg">
    </div>
    <div class="ivory content">
      <ul class="color-blocks">
      <?php 
        if ($vision = $page -> vision()->toStructure()):
        foreach($vision as $value) :?>
        <li class="">
          <h3><?=$value->value()?></h3>
          <p><?=$value->explanation()?></p>
        </li>
      <?php endforeach; endif; ?>
      </ul>
    </div>
  </section>
  <section class="padded principles">
    <h4>Guiding Principles</h4>
     <?=$page->principles()?>
  </section>
  <section class="split flush m-reverse">
    <div class="content ivory">
      <h1><?= $page -> definition_header() ?></h1>
      <p><?= $page -> definition()-> kirbytext() ?></p>
    </div>
    <div class="image <?=$page->block_color()?>">
      <?php if($image = $page->cover_image()->toFile()): ?>
        <figure class="collage">
          <img src="<?= $image->url() ?>">
        </figure>
      <?php endif ?>
      <figure class="tatreez-bg">
        <img src="/assets/icons/pixels_square.svg" alt="" class="tatreez-icon rotate">
      <figure class="tatreez-bg">
    </div>
  </section>
</div>
<?php snippet('footer')?>