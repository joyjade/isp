<?php snippet('nav')?>

<div class="main">
  <div class="section banner">
    <img src="/assets/icons/isp.svg" alt="" class="centered-logo">
    <div class="newsletter"></div>
    <?php if($image = $page->image('banner.png')): ?>
      <img src="<?= $image->url() ?>">
    <?php endif ?>
  </div>
  <section class="split flush">
    <div>
      <figure>
        <?php if($image = $page->image('split.png')): ?>
          <img src="<?= $image->url() ?>">
        <?php endif ?>
      </figure>
    </div>
    <div class="content amber">
      <p class="large">
        <?= $page -> description() ?>
      </p>
    </div>
  </div>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/project')]) ?>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/cocreation')]) ?>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/film')]) ?>
  <section class="split">
    <?php snippet('press', ['press' => page('press'), 'color' => 'moss']) ?>
    <div class="ivory content">
      <h2>Contact</h2>
      <p><?=$page->contact()->kirbytext() ?></p>
    </div>
  </section>

  
  <div class="split section">

  </div>
  <div class="split section"></div>
</div>

<?php snippet('footer')?>