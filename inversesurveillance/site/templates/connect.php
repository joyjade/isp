
<?php snippet('nav')?>

<div class="main">
  <section class="split flush top">
    <?php snippet('connect', ['contact' => $page, 'home'=> false]) ?>
    <div class="image <?=$page-> color()?>">  
      <?php if($cover = $page->image()) :?>
       <figure class="collage">
         <img src="<?= $cover-> url() ?>" alt="">
       </figure>
      <?php endif; ?>
    </div>
  </section>
</div>


<?php snippet('footer')?>