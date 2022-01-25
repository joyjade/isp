<?php snippet('nav')?>

<div class="main cocreation">

  <section class="split flush banner m-reverse">
    <div>
      <figure>
        <?php if($image = $page->image('coche.jpg')): ?>
          <img src="<?= $image->url() ?>">
        <?php endif ?>
      </figure>
    </div>
    <div class="content amber">
      <h6 class="uppercase">Process</h6>
      <h1 class="large"><?=$page ->title() ?></h1>
      <p class="large">
        <?= $page -> description() ?>
      </p>
    </div>
  </section>
  <section class="split flush">
    <div class="forest content">
      <div class="sticky">
        <h1>
          Our Vision
        </h1>
        <p class="large">The Inverse Surveillance Project strives to model how we as a community can… →</p>
      </div>
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
  <section class="split flush">
    <div class="content ivory">
      <h1><?= $page -> definition_header() ?></h1>
      <p><?= $page -> definition()-> kirbytext() ?></p>
    </div>
    <div class="image moss">
      <?php if($image = $page->image('hugs.jpg')): ?>
        <figure class="collage">
          <img src="<?= $image->url() ?>">
        </figure>
      <?php endif ?>
    </div>
  </section>
</div>
<?php snippet('footer')?>