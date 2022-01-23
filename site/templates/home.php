<?php snippet('nav')?>

<div class="">
  <div class="section banner">
    <img src="/assets/icons/isp.svg" alt="" class="centered-logo">
    <div class="newsletter"></div>
    <?php if($image = $page->image('banner_3.jpg')): ?>
      <img class="banner-img" src="<?= $image->url() ?>">
    <?php endif ?>
  </div>
  <section class="flush statement amber">
    <img src="/assets/icons/pixels_4.svg" alt="">
    <div class="content ">
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
    <div class="ivory content contact">
      <h6></h6>
      <h1>Contact</h1>
      <p><?=$page->contact()->kirbytext() ?></p>
    </div>
  </section>

  
  <div class="split section">

  </div>
  <div class="split section"></div>
</div>

<?php snippet('footer')?>