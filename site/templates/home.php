<?php snippet('nav')?>

<div class="main">
  <div class="section banner">
    <h1 class="logo">Inverse Surveillance Project</h1>
    <div class="newsletter"></div>
    <?php if($image = $page->image('banner.png')): ?>
      <img src="<?= $image->url() ?>">
    <?php endif ?>
  </div>
  <section class="split">
    <div>
      <?php if($image = $page->image('split.png')): ?>
        <img src="<?= $image->url() ?>">
      <?php endif ?>
    </div>
    <div class="content moss">
      <p class="large">
        <?= $page -> description() ?>
      </p>
    </div>
  </div>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/project')]) ?>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/cocreation')]) ?>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/film')]) ?>
  <section class="split">
    <div class="amber content">
      <h2>Press</h2>
    </div>
    <div class="ivory content">
      <h2>Contact</h2>
    </div>
  </section>

  
  <div class="split section">

  </div>
  <div class="split section"></div>
</div>

<?php snippet('footer')?>