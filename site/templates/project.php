<?php snippet('nav');
  $elements = $page -> elements() -> toStructure();
?>

<div class="main">
  <section class="section project">
    <div>
      <h1><?= $page->header() ?></h1>
      <p class="large">
        <?php foreach( $elements as $element) :?>
          <span><?=$element->before()?></span>
          <?php snippet('piece', ['term' => $element->word(), 'piece' => $element->linked_page()->toPage()]) ?>
          <span> <?=$element->after()?></span>
        <?php endforeach ?>
      </p>
    </div>
    <div class="image">
      <?php foreach( $elements as $element) : 
        $piece = $element->linked_page()->toPage();
        $image = $piece->photo()->toFile() ? $piece->photo()->toFile() : $piece->image()
        ?>
        <figure class="hidden <?= $element->side() ?> <?= $element->color() ?>" id="<?= $piece->id() ?>">
          <img src="<?= $image->url() ?>" alt="">
        </figure>
      <?php endforeach?>
    </div>
  </section>
</div>
  
<?php snippet('footer')?>