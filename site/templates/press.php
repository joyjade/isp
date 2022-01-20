<?php snippet('nav')?>



<div class="main">
  <section class="split flush">
    <?php snippet('press', ['press' => $page, 'color' => 'moss']) ?>
    
    <div class="ivory">
     <?php if($cover = $page->image()) :?>
      <figure>
        <img src="<?= $cover-> url() ?>" alt="">
      </figure>
     <?php endif; ?>

    </div>
  </section>
</div>

<?php snippet('footer')?>