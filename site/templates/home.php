<?php snippet('nav')?>

<div class="home">
  <div class="section banner">
    <img src="/assets/icons/isp.svg" alt="" class="centered-logo">
    <div class="newsletter"></div>
    <?php if($image = $page->image('banner_final.jpg')): ?>
      <img class="banner-img" src="<?= $image->url() ?>">
    <?php endif ?>
  </div>
  <section class="split flush">
    <div class="image amber">
      <?php if($image = $page->image('collage_4.png')): ?>
        <figure class="collage">
          <img src="<?= $image->url() ?>">
        </figure>
      <?php endif ?>
      <figure class="tatreez-bg">
        <img src="/assets/icons/pixels_square.svg" alt="" class="tatreez-icon">
      <figure class="tatreez-bg">
    </div>
    <div class="content ivory statement">
      <div class="sticky">
        <h2>
          <?= $page -> heading() ?>
        </h2>
      </div>
      <img src="/assets/icons/icon_pxls.png" alt="" class="tatreez-icon">
    </div>
  </section>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/project')]) ?>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/cocreation')]) ?>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/film')]) ?>
  <section class="split">
    <?php snippet('press', ['press' => page('press'), 'color' => 'moss']) ?>
    <div class="ivory content contact">
      <h6></h6>
      <h1>Contact</h1>
      <p><?=$page->contact()->kirbytext() ?></p>
      <br>
    
      <h3>Support Our Work</h3>
      <p>Need a link here for people to donate!</p>
      <figure class="tatreez-bg">
        <img src="/assets/icons/pixels_square_3.svg" alt="" class="tatreez-icon">
      <figure class="tatreez-bg">

    </div>
  </section>
</div>

<?php snippet('footer')?>