<!-- <?php  ?> -->
<section class="split <?=$class?>">
  <div class="content">
    <div class="sticky">
      <h1><?= $section-> title() ?></h1>
      <p><?= $section-> description() ?></p>
      <h6>
        <?php if($section->linkedpage()->toPage()) {
          $url = $section->linkedpage()->toPage()->url();
        } else {
          $url = $section->externallink();
        }?>
          <a href="<?= $url?>" class=""><?= $section-> more() ?></a>
      </h6>
    </div>
  </div>
  <div class="image">
    <figure>
    <?php if($image = $section->image()): ?>
      <img src="<?= $image->url() ?>">
    <?php endif ?>
    </figure>
  </div>
</section>
