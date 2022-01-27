
<?php snippet('nav')?>

<div class="main">
  <section class="split flush top">
    <?php snippet('connect', ['contact' => $page]) ?>
    <div class="image moss">  
      <?php if($cover = $page->image()) :?>
       <figure class="collage">
         <img src="<?= $cover-> url() ?>" alt="">
       </figure>
      <?php endif; ?>
    </div>
  </section>
</div>


<?php snippet('footer')?>