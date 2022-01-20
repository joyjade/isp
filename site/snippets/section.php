<!-- <?php  ?> -->
<section class="split <?=$class?>">
  <div class="content">
    <h2><?= $section-> title() ?></h2>
    <p><?= $section-> description() ?></p>
    <h6><?= $section-> more() ?></h6>
    <a href="<?= $section-> url() ?>" class=""><?= $section-> title() ?></a>
  </div>
  <div class="image">
    <figure>
    <?php if($image = $section->image()): ?>
      <img src="<?= $image->url() ?>">
    <?php endif ?>
    </figure>
  </div>
</section>
