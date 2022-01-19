<?php snippet('nav')?>

<div class="main">

  <section class="split">
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
  <section>
     <?=$page->principles()?>
  </section>
</div>
<?php snippet('footer')?>