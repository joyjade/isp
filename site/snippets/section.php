<!-- <?php  ?> -->
<section class="split <?=$class?>">
  <div class="content">
    <div class="sticky">
      <h1><?= $section-> title() ?></h1>
      <?= $section-> description()->kirbytext() ?>
      <h6>
        <?php if($section->linkedpage()->toPage()) {
          $url = $section->linkedpage()->toPage()->url();
        } else {
          $url = $section->externallink();
        }?>
          <a href="<?= $url?>" class=""><?= $section-> linktext() ?></a>
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
