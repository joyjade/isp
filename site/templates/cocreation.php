<?php snippet('nav')?>

<div class="main cocreation">

  <section class="split flush banner">
    <div>
      <?php if($image = $page->image('split.png')): ?>
        <img src="<?= $image->url() ?>">
      <?php endif ?>
    </div>
    <div class="content amber">
      <h6>Process</h6>
      <h1><?=$page ->title() ?></h1>
      <p class="large">
        <?= $page -> description() ?>
      </p>
    </div>
  </section>
  <section class="split divider">
    <div class="content">
      <h2><?= $page -> definition_header() ?></h2>
      <p><?= $page -> definition()-> kirbytext() ?></p>
    </div>
    <div class="image">
      <?php if($image = $page->image('split.png')): ?>
        <img src="<?= $image->url() ?>">
      <?php endif ?>
    </div>
  </section>
  <section class="padded principles">
    <h4>Guiding Principles</h4>
     <?=$page->principles()?>
  </section>
  <section class="split">
    <div class="forest content">
      <h2>
        Our Vision
      </h2>
      <p class="large">The Inverse Surveillance Project strives and is working to model how we as a community can →</p>
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
</div>
<?php snippet('footer')?>